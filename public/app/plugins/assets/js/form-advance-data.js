$(document).ready(function(){"use strict";$(".select2").select2(),$(".selectpicker").selectpicker();Array.prototype.slice.call(document.querySelectorAll(".switch-bt"));$(".switch-bt").each(function(){new Switchery($(this)[0],$(this).data())}),$(".vertical-spin").TouchSpin({verticalbuttons:!0,verticalupclass:"ti-plus",verticaldownclass:"ti-minus"}),$(".vertical-spin").TouchSpin({verticalbuttons:!0})&&$(".vertical-spin").prev(".bootstrap-touchspin-prefix").remove(),$("input[name='tch1']").TouchSpin({min:0,max:100,step:.1,decimals:2,boostat:5,maxboostedstep:10,postfix:"%"}),$("input[name='tch2']").TouchSpin({min:-1e9,max:1e9,stepinterval:50,maxboostedstep:1e7,prefix:"$"}),$("input[name='tch3']").TouchSpin(),$("input[name='tch3_22']").TouchSpin({initval:40}),$("input[name='tch5']").TouchSpin({prefix:"pre",postfix:"post"}),$("#pre-selected-options").multiSelect(),$("#optgroup").multiSelect({selectableOptgroup:!0}),$("#select-methods").multiSelect(),$("#select-all").on("click",function(){return $("#select-methods").multiSelect("select_all"),!1}),$("#deselect-all").on("click",function(){return $("#select-methods").multiSelect("deselect_all"),!1}),$("#refresh").on("click",function(){return $("#select-methods").multiSelect("refresh"),!1}),$("#add-option").on("click",function(){return $("#select-methods").multiSelect("addOption",{value:42,text:"test 42",index:0}),!1}),$(".bs-switch").bootstrapSwitch("state",!0),$("#check_box_value").text($("#check_box_switch").bootstrapSwitch("state")),$("#check_box_switch").on("switchChange.bootstrapSwitch",function(){$("#check_box_value").text($("#check_box_switch").bootstrapSwitch("state"))})});