<?php

namespace App\Models;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;
	public $discount = null;

	public function __construct($oldCart)
	{
		if ($oldCart) {
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
			$this->discount = $oldCart->discount;
		}
	}

	public function add($item, $id, $qty)
	{
		$price = $item->price;
		$giohang = ['qty' => 0, 'price' => $price, 'item' => $item];
		if ($this->items) {
			if (array_key_exists($id, $this->items)) {
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty'] += $qty;
		$giohang['price'] = $price * $qty;
		$this->items[$id] = $giohang;
		$this->totalQty += $qty;
		$this->totalPrice += $giohang['price'];
	}
	//xóa 1
	public function reduceByOne($id)
	{
		$this->items[$id]['qty']--;
		$price = $this->items[$id]['item']['price'];
		$this->items[$id]['price'] -= $price;
		$this->totalQty--;
		$this->totalPrice -= $price;
		if ($this->items[$id]['qty'] <= 0) {
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id)
	{
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}

	public function setDiscount($sss)
	{
		$this->discount = $sss;
	}
}
