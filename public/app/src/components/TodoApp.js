import React, { Component } from 'react';


// Uur Component
import TodoList from './TodoList.js'
import TodoForm from './TodoForm.js'

class TodoApp extends Component 
{

    constructor(props)
    {
        super(props);
        this.state = {
            todos : []
        }
    }

    fetchTodoList()
    {
        fetch(API_URL+'/todos').then((response)=> 
        {
            response.json().then((jsonResponse) => 
            {                
                this.setState({todos:jsonResponse})
            })
        }); 
    }


    handleNewTodo(todo)
    {                                    
        const tempTodo =  this.state.todos.slice();       
        tempTodo.unshift(todo);
        this.setState({todos:tempTodo})
    }

    onDeleteTodo(todo)
    {
        if(!confirm('Are you sure ?')) return     
        let self  = this
        let index = self.state.todos.indexOf(todo)
        let myHeaders = new Headers({
            "X-CSRF-TOKEN": _token
        });

        let data  = new FormData()
        data.append('id', todo.id)
        fetch(API_URL+'/todos/destroy', 
        {
            method : 'post',
            body : data,
            credentials: "same-origin",
            headers: myHeaders
        }).then((response)=> 
        {
            response.json().then((jsonResponse) => {
                if(jsonResponse.success)
                {
                    self.setState({
                        todos: self.state.todos.filter((_,i)=> i!== index)
                        // todos: update(self.state.todos, {$splice: [[index, 1]]}) // using react addons
                    })
                }
            })
        })
    }

    onMarkAs(todo, state='done')
    {
        let url   = state == 'done' ? API_URL+'/todos/done' : API_URL + '/todos/undone'
        let data  = new FormData
        let index = this.state.todos.indexOf(todo)
        let self  = this
        let myHeaders = new Headers({
            "X-CSRF-TOKEN": _token
        });
        data.append('id', todo.id)
        fetch(url, {
            method : 'post',
            body : data,
            credentials: "same-origin",
            headers: myHeaders
        }).then((response)=> 
        {
            response.json().then((jsonResponse)=> 
            {
                if(jsonResponse.success)
                {
                    let todos = self.state.todos
                    todos[index].done = state == 'done'
                    self.setState({
                        todos : todos
                    })        
                }
            })
        })
    }

    remaining()
    {
        let count = 0;
        this.state.todos.map((todo)=> {
            if(!todo.done) {
                count ++;
            }
        })

        return count;
    } 
    

    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-md-8 col-md-offset-2">
                        <h3>[React laravel] demo todo 123</h3>
                        <TodoForm onTodoStore={this.handleNewTodo.bind(this)}/>
                        <TodoList
                            todos={this.state.todos}
                            onDeleteTodo={this.onDeleteTodo.bind(this)}
                            onMarkAs={this.onMarkAs.bind(this)}
                        />

                        <h1>{this.remaining()} task working of total {this.state.todos.length}</h1>
                    </div>
                </div>
            </div>
        )
    }

    componentDidMount()
    {
        this.fetchTodoList();
    }
}

export default TodoApp;