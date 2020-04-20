<?php
include_once "Node.php";

class MyLinkedList
{
    public $numNode;
    public $first;
    public $last;

    function __construct()
    {
        $this->first = null;
        $this->last = null;
        $this->numNode = 0;
    }

    public function addFirst($data)
    {
        $newNode = new Node($data);
        $newNode->next = $this->first;
        $this->first = $newNode;

        if ($this->last == null) {
            $this->last = &$newNode;
        }
        $this->numNode++;
    }

    public function addLast($data)
    {
        if ($this->first != null) {
            $newNode = new Node($data);
            $this->last->next = $newNode;
            $newNode->next = null;
            $this->last = $newNode;
            $this->numNode++;
        } else {
            $this->addFirst($data);
        }
    }

    public function addNode($index, $data)
    {
        $newNode = new Node($data);

        if ($index == 1) {
            $this->addFirst($data);
        } elseif ($index > 1 && $index <= $this->numNode) {
            $link = $this->first;
            for ($i = 1; $i < $index - 1; $i++) {
                $link = $link->next;
            }
            $newNode->next = $link->next;
            $link->next = $newNode;
            $this->numNode++;
        } elseif ($index == ($this->numNode + 1)) {
            $this->addLast($data);
        } else {
            return 'Invalid index';
        }
    }

    public function remove($index)
    {
        if ($index == 0) {
            if ($this->numNode == 1) {
                $this->first = null;
                $this->last = null;
                $this->numNode--;
            } elseif ($this->numNode != 0) {
                $temp = $this->first;
                $this->first = $this->first->next;
                $temp = null;
                $this->numNode--;
            }
        } elseif ($index > 0 && $index <= $this->numNode) {
            $link = $this->first;
            for ($i = 0; $i < $index - 1; $i++) {
                $link = $link->next;
            }
            $temp = $link->next;
            $link->next = $temp->next;
            if ($temp->next == null) {
                $this->last = $link;
            }
            $temp = null;
            $this->numNode--;
        } else {
            return 'Invalid index';
        }
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function isContain($data)
    {
        foreach ($this->readList() as $key => $value) {
            if ($data == $value)
                return true;
        }
        return false;
    }

    public function getIndexOf($data)
    {

        return array_search($data, $this->readList());
    }

    public function removeBoolean($data)
    {
        if ($this->isContain($data)) {
            $this->remove($this->getIndexOf($data));
            return true;
        }
        return false;
    }


    public function size()
    {
        return $this->numNode;
    }

    public function readNode($index)
    {
        if ($index <= $this->numNode) {
            $current = $this->first;
            $position = 0;
            while ($position != $index) {
                if ($current->next == null) {
                    return null;
                } else {
                    $current = $current->next;
                }
                $position++;
            }
            return $current->data;
        } else {
            return null;
        }
    }

    public function readList()
    {
        $listData = [];
        $current = $this->first;

        while ($current != null) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    /**
     * @return null
     */
    public function getFirst()
    {
        return $this->first->data;
    }

    /**
     * @return null
     */
    public function getLast()
    {
        return $this->last->data;
    }

    public function clear()
    {
        $this->first = null;
    }
}