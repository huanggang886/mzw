/**
 * Created by Administrator on 15-5-25.
 */
$(function(){


    //展开播放列表
    $("#spansongnum1").click(function(){
        $("#divplayframe").show();
        $("#divplayframe").animate({
            opacity:'1'
        },250);
    });

    //收起列表
    $("#btnclose").click(function(){
        $("#divplayframe").animate({
            opacity:'0'
        },250,function(){
            $("#divplayframe").hide();
        });
    });

    //收起播放器
    $("#btnfold").click(function(){
        var temp= $("#divplayframe").is(":hidden");
        //取到当前播放器显示栏的像素
        var leftnum = $('#divplayer').css("left");
        var hidedivplayer = function(){
            //隐藏显示栏
            $("#divplayer").animate({
                left:'-540px'
            },500,function(){
                $("#divplayer").addClass("m_player_folded");
            });
        }
        if(leftnum=='0px'){//显示状态，改为隐藏
            if(temp){
                hidedivplayer();
            }else{
                console.log("隐藏列表");
                //隐藏音乐列表
                $("#divplayframe").animate({
                    opacity:'0'
                },250,function(){
                    $("#divplayframe").hide();
                    hidedivplayer();
                });
            }
        }else{//否则就是隐藏状态，改为显示
            $("#divplayer").animate({
                left:'0px'
            },500,function(){
                $("#divplayer").removeClass("m_player_folded");
            });
        }
    });
});


