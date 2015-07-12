<head>
    <style>
        #paper_search{
            background-color: #F0F0F0;
            width:720px;
            min-height:25px;
            height:auto;
            float:left;
            margin-top:3px;
            margin-left:0px;
            margin-bottom:10px;
            padding:5px 25px 5px 25px;
            line-height:20px;
            -webkit-box-shadow: #999 0px 0px  2px ;
            -moz-box-shadow: #999 0px 0px 2px ;
            box-shadow: #999 0px 0px 2px ;
            color:#444;
            opacity: .8;  
            -ms-filter: "alpha(opacity=80)"; 
            filter: alpha(opacity=80);   
            -khtml-opacity: .8;  
            -moz-opacity: .8; 
        }
        #paper_search input{
            float: left;
            margin-right: 15px;
        }
        #searchword{
            height: 35px;
            width: 650px;
        }
    </style>
</head>
<div id="paper_search">
    <form id="search_id", method="get", action="paper_search_result.php">
        <input type="text" id="searchword" name="pub_title" onfocus="this.value=''" value=" Paper Search"/>
        <input type="image" src="graph/HomePage/search.gif" 
               width="35" height="35" id="go" alt="PaperSearch" title="PaperSearch"
               style="-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; " />
    </form>
</div>
