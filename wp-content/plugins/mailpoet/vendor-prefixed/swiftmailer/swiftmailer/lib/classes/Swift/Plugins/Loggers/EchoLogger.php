<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Plugins_Loggers_EchoLogger implements Swift_Plugins_Logger
{
 private $isHtml;
 public function __construct($isHtml = \true)
 {
 $this->isHtml = $isHtml;
 }
 public function add($entry)
 {
 if ($this->isHtml) {
 \printf('%s%s%s', \htmlspecialchars($entry, \ENT_QUOTES), '<br />', \PHP_EOL);
 } else {
 \printf('%s%s', $entry, \PHP_EOL);
 }
 }
 public function clear()
 {
 }
 public function dump()
 {
 }
}