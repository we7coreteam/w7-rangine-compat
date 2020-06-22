<?php

/**
 * This file is part of Rangine
 *
 * (c) We7Team 2019 <https://www.rangine.com/>
 *
 * document http://s.w7.cc/index.php?c=wiki&do=view&id=317&list=2284
 *
 * visited https://www.rangine.com/ for more details
 */

use W7\App;
use W7\Core\Facades\Event;
use W7\Core\Facades\Container;
use W7\Core\Facades\Router;
use W7\Core\Facades\DB;
use W7\Core\Facades\Output;

if (!function_exists('ieventDispatcher')) {
	function ieventDispatcher() {
		/**
		 * @deprecated
		 * @var \W7\Core\Events\Dispatcher $dispatcher
		 */
		return Event::getFacadeRoot();
	}
}

if (!function_exists('ievent')) {
	/**
	 * 派发一个事件
	 * @deprecated
	 * @param $eventName
	 * @param array $args
	 * @param bool $halt
	 * @return array|null
	 */
	function ievent($eventName, $args = [], $halt = false) {
		return Event::dispatch($eventName, $args, $halt);
	}
}
if (!function_exists('iloader')) {

	/**
	 * 别名
	 * @deprecated
	 * @return \W7\Core\Container\Container
	 */
	function iloader() {
		return icontainer();
	}

	/**
	 * 获取容器
	 * @deprecated
	 * @return \W7\Core\Container\Container
	 */
	function icontainer() {
		return Container::getFacadeRoot();
	}
}

if (!function_exists('ioutputer')) {
	/**
	 * 获取输出对象
	 * @deprecated
	 * @return W7\Console\Io\Output
	 */
	function ioutputer() {
		return Output::getFacadeRoot();
	}
}

if (!function_exists('iconfig')) {
	/**
	 * 输入对象
	 * @deprecated
	 * @return \W7\Core\Config\Config
	 */
	function iconfig() {
		return App::getApp()->getConfigger();
	}
}

if (!function_exists('ilogger')) {
	/**
	 * 返回logger对象
	 * @deprecated
	 * @return \W7\Core\Log\Logger
	 */
	function ilogger() {
		return App::getApp()->getLogger();
	}
}

if (!function_exists('idb')) {
	/**
	 * 返回一个数据库连接对象
	 * @deprecated
	 * @return \W7\Core\Database\DatabaseManager
	 */
	function idb() {
		return DB::getFacadeRoot();
	}
}

if (!function_exists('icontext')) {
	/**
	 * 返回logger对象
	 * @deprecated
	 * @return \W7\Core\Helper\Storage\Context
	 */
	function icontext() {
		return App::getApp()->getContext();
	}
}

if (!function_exists('icache')) {
	/**
	 * @deprecated
	 * @return \W7\Core\Cache\Cache
	 */
	function icache() {
		return App::getApp()->getCacher();
	}
}

if (!function_exists('irouter')) {
	/**
	 * @deprecated
	 * @return \W7\Core\Route\Router
	 */
	function irouter() {
		return Router::getFacadeRoot();
	}
}