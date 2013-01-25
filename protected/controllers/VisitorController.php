<?php

class VisitorController extends Controller
{
	public function actionIndex()
	{
		$query = "select ";
		executeSQLQuery($query);
		$this->render('index');
	}

}