    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/css/main-white.css">

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
        
        
         
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
        
         
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }
      .green {
          color:#99cc32;
          font-weight: bolder;
      }

    </style>
    