<?php
	namespace frontend\components;

	use yii\Base\Widget;
	use yii\helpers\Html;
	use yii;
	class TagsCloudWidget extends  Widget{
		public  $tags;
		public function init()
		{
			parent::init(); // TODO: Change the autogenerated stub
		}


		public function run()
		{
//			parent::run(); // TODO: Change the autogenerated stub
			$tagsString='';
			$fontStyle=[
				'6'=>'danger',
				'5'=>'info',
				'4'=>'warning',
				'3'=>'primary',
				'2'=>'success',
			];

			foreach ($this->tags as $tag=>$weight) {
				$tagsString.='<a href="'.Yii::$app->homeUrl.'?r=post/index&PostSearch[tags]'.$tag.'">
								<h'.$weight.' style="display: inline-block;"><span class="label label-'.$fontStyle[$weight].'">'.$tag.'</span></h'.$weight.'>
								</a>';
			}
			return $tagsString;
		}

	}