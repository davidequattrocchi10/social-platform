<?php

/**
 * Class representing a User.
 */
class User
{
    /**
     * Constructor for User class.
     *
     * @param int $id The unique identifier of the user.
     * @param string $username The username of the user.
     * @param string $email The mail of the user.
     * @param string $birthdate The birthdate of the user.
     * @param string $phone The phone number of the user.
     * 
     */
    public function __construct(private int $id, private string $username, private string $email, private string $birthdate, private string $phone,)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->phone = $phone;
    }


    /**
     * Get the email of the user.
     *
     * @return string the email of the user.
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Get the birthdate of the user.
     *
     * @return string the birthdate of the user.
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Get the phone of the user.
     *
     * @return string the phone of the user.
     */
    public function getPhone()
    {
        return $this->phone;
    }


    /**
     * Get the username of the user.
     *
     * @return string the username of the user.
     */
    public function getUsername()
    {
        return $this->username;
    }
}
