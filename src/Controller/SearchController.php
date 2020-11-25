<?php

namespace App\Controller;

use Cake\Http\Response;

/**
 * Search Controller
 */
class SearchController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
    }

    /**
     * Index method handles requests from home page
     *it is linked with index.ctp in view/search/index.ctp
     * @return Response|void
     */
    public function index()
    {
        $postcodeInputName = 'postcode'; // search form input name
        $postcodeInputNameLength = 4; // search form input name max length
        $zoneDates = []; // empty table by default
        /*
         * $homePageIsRequested = $this->request->is('post');
         * if ($homePageIsRequested) {
           // TODO implement auto complete for search input with available post codes
        }*/
        $searchFormIsSubmitted = $this->request->is('post');
        if ($searchFormIsSubmitted) {
            $searchFormInputText = $this->getRequest()->getData($postcodeInputName);
            $zoneDatesMappingsModel = $this->getTableLocator()->get('Zonedates');
            $zoneDates = $zoneDatesMappingsModel->findZoneDatesUsingPostCode($searchFormInputText);
        }
        $this->set(compact('postcodeInputName', 'postcodeInputNameLength', 'zoneDates'));
    }

}
