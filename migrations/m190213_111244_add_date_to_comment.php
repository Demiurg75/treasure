<?php

use yii\db\Migration;

/**
 * Class m190213_111244_add_date_to_comment
 */
class m190213_111244_add_date_to_comment extends Migration
{
    /**
     * {@inheritdoc}
     
    public function safeUp()
    {
		
    }

    /**
     * {@inheritdoc}
     
    public function safeDown()
    {
        echo "m190213_111244_add_date_to_comment cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.*/
    public function up()
    {
		$this->addColumn('comment', 'date', $this->date());
    }

    public function down()
    {
        $this->dropColumn('comment', 'date');
    }
    
}
