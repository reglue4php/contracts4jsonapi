<?php
namespace Reglue4php\Contracts4jsonapi;

interface Document {
	public function toJson();
	
	public function toArray();
	
	public function get($key, $default = null);
	
	public function getProlog();
	
	public function getMeta();

	public function isFailure();
	
	public function isSuccess();
	
	public function hasDatalist();
	
	public function hasDataResource();
}