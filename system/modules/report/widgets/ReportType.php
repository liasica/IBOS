<?php

namespace application\modules\report\widgets;

use application\core\utils\IBOS;
use application\modules\report\model\ReportType as MreportType;

class ReportType extends StatReportBase {

    const VIEW = 'application.modules.report.views.widget.type';

    /**
     * @return type
     */
    public function run() {
        $module = $this->getController()->getModule()->getId();
        $data = array(
            'type' => $this->getType(),
            'uid' => implode( ',', $this->getUid() ),
            'lang' => IBOS::getLangSource( 'report.default' ),
            'reportTypes' => MreportType::model()->fetchSysType()
        );
        $this->render( self::VIEW, $data );
    }

}
