<?php

class Delete_Author_From_Posts_Table {

	public function up()
	{
		Schema::table('posts', function($table) {
			$table->drop_column('author_id');
		});
	}

	public function down()
	{
		Schema::table('posts', function($table) {
			$table->text('author_id');
		});
	}

}