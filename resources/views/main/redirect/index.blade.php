<?php

App\Http\Controllers\RedirectController::movePage('/'.Request::local()->code.'/'.$page->slug().'/'.$page->redirect, 301);


