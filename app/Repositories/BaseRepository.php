<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 31/01/17
 * Time: 23:52
 */

namespace App\Repositories;

use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class BaseRepository
{
    use ValidatesRequests, RecursiveMenu;
    protected $total = 0;
    /**
     * Get all model
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll($filter = false, $sort = false, $limit = false)
    {
        if ($filter === false && $sort === false && $limit === false)
        {
            return $this->model->all();
        }

        $query = $this->model->where(function($q) use ($filter)
        {
            if (!empty($filter))
            {
                foreach ($filter as $f)
                {
                    list($col, $ope, $val) = $f;
                    $q->where($col, $ope, $val);
                }
            }
        });

        if ($sort)
        {
            list($col, $dir) = $sort;
            $query->orderBy($col, $dir);
        }

        return $limit ? $query->paginate($limit) : $query->get();
    }

    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Get a specify model bao loi neu khong tim thay
     * @param  int $id model ID
     * @return model
     */
    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Get item of model
     * @param  int $id Model ID
     * @return Model
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Get items with filter & paginate
     * @param  array  $filter
     * @param  integer $pageSize
     * @return Illuminate\Support\Collection Model collections
     */
    public function getAllWithPaginate($filter = [], $pageSize = 20)
    {
        if ( ! empty($filter))
        {
            foreach ($filter as $key => $value)
            {
                if ($value == '')
                {
                    unset($filter[$key]);
                }
            }
            return $this->model->where($filter)->paginate($pageSize);
        }
        return $this->model->paginate($pageSize);
    }

    /**
     * Create a model
     * @param  array $attributes
     * @return new Model
     */
    public function storeData($attributes)
    {
        return $this->model->create($attributes);

    }

    /**
     * Update a model
     * @param  int $id Model ID
     * @param  array $data
     * @return Model
     */
    public function updateById($id, $data)
    {
        $model = $this->findById($id);
        $model->fill($data)->save();
        return $model;
    }

    /**
     * Created by : BillJanny
     * Date: 12:04 AM - 2/14/2017
     * update Thông tin trạng thái quick
     * @param  int $id          : trường khóa chính của bảng
     * @param  string $fieldInt : trường só nguyên của bảng chưa 2 giá trị 0 | 1
     * @param  int $otherValue  : một giá trị nào đó được định nghĩa sẵn  (VD : -1)
     * @return int
     */
    public function updateByField($id, $field, $otherValue='')
    {
        $row = $this->findById($id);
        $row->$field = ($otherValue ? $otherValue : (($row->$field == 1) ? 0 : 1));
        $row->save();
        return 1;
    }

    /**
     * Created by : BillJanny
     * Date: 7:41 PM - 2/13/2017
     * Tìm kiếm theo điều kiện column
     * @param array $condition : mảng điều kiện gồm cột, opr, giá trị
     * @param array $listColumn : danh sách cột
     * @return mixed
     */
    public function findBy($condition= array(), $listColumn = array('*'))
    {
        list($column, $operator, $value ) = $condition;
        return $this->model->where($column, $operator, $value)->first($listColumn);
    }

    /**
     * Delete a model
     * @param int|array int $id model ID
     * @return bool
     */
    public function delete($id)
    {
        return is_array($id) ? $this->model->destroy($id) : $this->findById($id)->delete();
    }


    public function getPluck($value, $key)
    {
        return $this->model->pluck($value, $key);
    }

    public function getInstance()
    {
        return new $this->model;
    }
}