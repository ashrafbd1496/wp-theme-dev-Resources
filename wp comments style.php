
/*-------------------------------------------------------------------------------
  17.Comment Section Styling
-------------------------------------------------------------------------------*/
#respond h3, .comments-title{
    color:black;
    padding:20px;
    font-size:20px;
    border-top:1px solid #000;
    border-bottom:1px solid #000;
    margin:30px 0;
}
#commentform .comment-notes{
    margin-bottom:20px;
}
#commentform label{
    display:block;
}
#commentform input[type="text"],
#commentform input[type="url"],
#commentform input[type="email"],
#commentform textarea{
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 20px;
    width: 100%;
    background-color: #f8f8f8;
    padding: 7px 10px;
    font-size: 18px;
}
#commentform input[type="submit"]{
    line-height: 38px;
    border-radius: 4px;
    padding: 0 20px;
    background-color: #fdb813;
    color: black;
    font-weight: bold;
    font-size: 16px;
    border:0;
    position: relative;
    transition:all 0.4s;
    cursor:pointer;
}
#commentform input[type="submit"]:hover{
    background-color: #6e551a;
    color: white;
}
.comment-body .comment-author{
    float:left;
    width:30%;
}
.comment-body .comment-author .fn{
    display:block;
    margin-top:10px;
}
.comment-body{
    overflow:hidden;
    margin-bottom:30px;
}
.comment{
    margin-bottom:30px;
}
.comment-list, .children{
    margin:0;
    padding:0;
    list-style-type: none;
}
.comment-list > li:first-child{
    border-top:0;
    padding-top:0;
}
.comment{
    border-top:1px solid #ccc;
    padding-top:30px;
    position:relative;
}
.children .comment{
    border-top:0;
}
.comment .children{
    border-top:1px dotted #5e666b;
    border-left:1px dotted #5e666b;
    padding-top:10px;
    padding-left:10px;
}
.children{
    margin-left:100px;
}
.children img{
    max-width:75px;
    height:auto;
}
.children .fn{
    font-size:12px;
}
.says{
    display:none;
}
.comment-metadata{
    margin-left:30%;        
}
.comment-metadata a{
    color:#5e666b;
    font-size:14px;
    margin-bottom:10px;
    display:block;
}
.comment-reply-link{
    position:absolute;
    top:15px;
    right:0;
    font-size:12px;
    color:#1a3794;
}
