<?php


class ChangePasswordForm extends CFormModel
{
    public $currentPassword;
    public $newPassword;
    public $newPassword_repeat;
    private $_user;

    public function rules()
    {
        return array(
            array(
                'currentPassword', 'compareCurrentPassword'
            ),
            array(
                'currentPassword, newPassword, newPassword_repeat', 'required',
                'message'=>'Hãy nhập {attribute}.',
            ),
            array(
                'newPassword_repeat', 'compare',
                'compareAttribute'=>'newPassword',
                'message'=>'Mật khẩu mới không phù hợp.',
            ),

        );
    }

    public function compareCurrentPassword($attribute,$params)
    {
        if( md5($this->currentPassword) !== $this->_user->password )
        {
            $this->addError($attribute,'Mật khẩu hiện nay là không chính xác');
        }
    }

    public function init()
    {
        $this->_user = User::model()->findByAttributes( array( 'email'=>Yii::app()->User->email ) );
    }

    public function attributeLabels()
    {
        return array(
            'currentPassword'=>'Mật khẩu hiện tại',
            'newPassword'=>'Mật khẩu mới',
            'newPassword_repeat'=>'Xác nhận mật khẩu mới ',
        );
    }

    public function changePassword()
    {
        $this->_user->password = md5($this->newPassword);

        if( $this->_user->save() )
            return true;
        return false;
    }


    public function beforeSave()
    {
        $this->password = md5($this->password);
        return true;
    }

}