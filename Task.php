<?php
class Task{
    private $description; 
    private $dateCreated; 
    private $dateUpdated; 
    private $dateDone; 
    private int $priority; 
    private bool $isDone = true; 

 
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): self
    {
        $this->created = new dateUpdated();
        $this->description = $description;

        return $this;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

   
    public function setDateCreated($dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated($dateUpdated): self
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    public function getDateDone()
    {
        return $this->dateDone;
    }

    public function setDateDone($dateDone): self
    {
        $this->dateDone = $dateDone;

        return $this;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority): self
    {
        $this->priority = $priority;

        return $this;
    }

  
    public function getIsDone()
    {
        return $this->isDone;
    }

 
    public function setIsDone($isDone): self
    {
        $this->isDone = $isDone;

        return $this;
    }
}
