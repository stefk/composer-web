<?php

use Composer\IO\IOInterface;

class MessageBufferIO implements IOInterface
{
    private $messages = array();

    public function getMessages()
    {
        return $this->messages;
    }

    public function isInteractive()
    {
        return false;
    }

    public function isVerbose()
    {
        return true;
    }

    public function isVeryVerbose()
    {
        return false;
    }

    public function isDebug()
    {
        return false;
    }

    public function isDecorated()
    {
        return true;
    }

    public function write($messages, $newline = true)
    {
        if (is_array($messages)) {
            $this->messages = array_merge($this->messages, $messages);
        } else {
            $this->messages[] =$messages;
        }
    }

    public function overwrite($messages, $newline = true, $size = 80)
    {
        $this->write($messages, $newline);
    }

    public function ask($question, $default = null)
    {
        return $default;
    }

    public function askConfirmation($question, $default = true)
    {
        return $default;
    }

    public function askAndValidate($question, $validator, $attempts = false, $default = null)
    {
        return $default;
    }

    public function askAndHideAnswer($question)
    {
        return null;
    }

    public function getAuthentications()
    {
        return array();
    }

    public function hasAuthentication($repositoryName)
    {
        return false;
    }

    public function getAuthentication($repositoryName)
    {
        return array('username' => null, 'password' => null);
    }

    public function setAuthentication($repositoryName, $username, $password = null)
    {
        return null;
    }
}