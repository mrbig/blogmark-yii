<?php

class m120617_174859_table_urls extends CDbMigration
{
	public function up()
	{
		$this->createTable(
			'urls',
			array(
				'id' => 'pk',
				'url' => 'string NOT NULL',
				'title' => 'text'
			)
		);
		
		$this->insert('urls', array('url' => 'http://example.org', 'title' => 'example1'));
		$this->insert('urls', array('url' => 'http://example.com', 'title' => 'example2'));
		$this->insert('urls', array('url' => 'http://example.net', 'title' => 'example3'));
	}

	public function down()
	{
		echo "m120617_174859_table_urls does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}