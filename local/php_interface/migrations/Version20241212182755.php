<?php

namespace Sprint\Migration;


class Version20241212182755 extends Version
{
    protected $author = "gaffarova.alina";

    protected $description   = "";

    protected $moduleVersion = "4.15.1";

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $this->getExchangeManager()
             ->HlblockElementsImport()
             ->setExchangeResource('hlblock_elements.xml')
             ->setLimit(20)
             ->execute(function ($item) {
                 $this->getHelperManager()
                      ->Hlblock()
                      ->addElement(
                          $item['hlblock_id'],
                          $item['fields']
                      );
             });
    }

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function down()
    {
    }


}
