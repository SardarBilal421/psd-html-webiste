<?php
class User{
    private $id,$FName,$LName,$Phone ,$Email,$Password,$Detail;

        public function __construct(){
            $this->Detail='<tr><td> First Name : '.$this->FName.' , Last Name :    '.$this->LName .',
            Phone :  '.$this->Phone. ', Email  :  '.$this->Email . ', Password :  ' .$this->Password .
                '</td>'.'<td><a href="./PDODelete.php?id='.$this->id.'" onclick="return confirm(\'Are you sure?\')" >Delete</a></td>'.
                '<td><a href="./PDOUpdate.php?id='.$this->id.'"> Update </a></td></tr>';
        }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFName()
    {
        return $this->FName;
    }

    /**
     * @param mixed $FName
     */
    public function setFName($FName)
    {
        $this->FName = $FName;
    }

    /**
     * @return mixed
     */
    public function getLName()
    {
        return $this->LName;
    }

    /**
     * @param mixed $LName
     */
    public function setLName($LName)
    {
        $this->LName = $LName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param mixed $Phone
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * @param string $Detail
     */
    public function setDetail($Detail)
    {
        $this->Detail = $Detail;
    }

    }


