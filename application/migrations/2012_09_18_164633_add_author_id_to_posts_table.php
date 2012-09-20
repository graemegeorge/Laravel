<?php

class Add_Author_Id_To_Posts_Table {

	public function up()
	{
		Schema::table('posts', function($table) {
			$table->text('author_id');
		});
	}

	public function down()
	{
		Schema::table('posts', function($table) {
			$table->drop_column('author_id');
		});
	}

}