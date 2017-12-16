import React, { Component } from 'react';

const TodoListItem = ({todo, deleteTodo, markAs}) => {
    let isDone = <a href="#" title="Mark as done" className="btn btn-sm btn-info" onClick={()=> markAs(todo)}>
                    <i className="fa fa-check"></i>
                </a>

    let doneClass = ''
    
    if(todo.done)
    {
        doneClass = 'todo-done';
        isDone = <a href="#" title="Mark as undone" className="btn btn-sm btn-info" onClick={()=> markAs(todo, 'undone')}>
                    <i className="fa fa-refresh"></i>
                </a>
    }

    return (
        <li className={`list-group-item list ${doneClass}`}>
            <div className="pull-left">
                {todo.body}
            </div>
            <div className="pull-right">
                {isDone}
                <a href="#" title="Remove" className="btn btn-sm btn-danger" onClick={()=>deleteTodo(todo)}>
                    <i className="fa fa-trash-o"></i>
                </a>
            </div>
        </li>
    )
}
export default TodoListItem;