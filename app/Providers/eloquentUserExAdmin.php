<?php

namespace App\Providers;

use App\Enums\FlagDefine;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Contracts\Hashing\Hasher as HasherContract;

class eloquentUserExAdmin extends EloquentUserProvider
{

    /**
     * @param HasherContract $hasher
     * @param $model
     */
    public function __construct(HasherContract $hasher, $model)
    {
        parent::__construct($hasher, $model);
    }

    /**
     * 指定された識別子に該当するユーザー情報を取得する
     * ログイン認証後の認証を行う。（ログイン後の認証保持
     * https://qiita.com/hkusaba/items/c5a7f43a6312a259f200
     * retrieveById: rewrite lai ham truy xuat ng dung cua EloquentUserProvider()
     * Auth::user()->id : truy xuat ng dung voi id = $identifier va nv_trangThai : 1 | 2
     *  1-khóa, 2-khả dụng
     * @param $identifier
     * @return UserContract|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function retrieveById($identifier)
    {
       $model = $this->createModel();
       //ユーザー情報
       //$user->menuAuths = [];
       return $this->newModelQuery($model)
                ->where($model->getAuthIdentifierName(), $identifier)
                ->where('is_unusable', FlagDefine::OFF)
                ->first();
    }


}
