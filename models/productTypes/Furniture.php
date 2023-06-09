<?php

namespace app\models\productTypes;

use app\models\Product;

class Furniture extends Product
{
    protected function validateValue()
    {
        if (($this->data['height'] &&  $this->data['height'] <= 0)
            || ($this->data['width'] && $this->data['width'] <= 0)
            || ($this->data['length'] &&  $this->data['length'] <= 0)
        ) {
            return "Please provide correct value!";
        }

        if (!$this->data['height'] || !$this->data['width'] || !$this->data['length']) {
            return "Please provide all dimensions!";
        } else {
            $this->value = 'Dimension: ' . $this->data['height'] . 'x' . $this->data['width'] . 'x' . $this->data['length'];
        }
    }
};