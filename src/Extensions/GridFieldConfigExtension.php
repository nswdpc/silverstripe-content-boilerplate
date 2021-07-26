<?php

namespace NSWDPC\Content;

use SilverStripe\Core\Config\Config;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\GridField\GridFieldPaginator;
use Symbiote\GridFieldExtensions\GridFieldConfigurablePaginator;

/**
 * Apply specific configuration to GridFieldConfig
 * @author James
 */
class GridFieldConfigExtension extends Extension {

    /**
     * Replace the core GridFieldPaginator with the configurable variant
     * Allowed pagination settings are set in _config.yml
     */
    public function updateConfig() {
        // work out whether Items per Page was set, and use that
        $itemsPagePage = null;
        if($paginator = $this->owner->getComponentByType( GridFieldPaginator::class )) {
            $itemsPerPage = $paginator->getItemsPerPage();
        }
        if(!$itemsPerPage) {
            // if not, use default
            $itemsPerPage = Config::inst()->get( GridFieldPaginator::class, 'default_items_per_page');
        }
        $this->owner->removeComponentsByType( GridFieldPaginator::class )
            ->addComponent( new GridFieldConfigurablePaginator($itemsPerPage) );
    }

}
