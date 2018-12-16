var LoginModalController = {
  tabsElementName: ".logmod__tabs li",
  tabElementName: ".logmod__tab",
  inputElementsName: ".logmod__form .input",
  hidePasswordName: ".hide-password",
  inputActionName: ".simform__actions",

  inputElements: null,
  tabsElement: null,
  tabElement: null,
  hidePassword: null,
  inputAction: null,

  activeTab: null,
  tabSelection: 0, // 0 - first, 1 - second

  findElements: function () {
      var base = this;
      base.tabsElement = $(base.tabsElementName);
      base.tabElement = $(base.tabElementName);
      base.inputElements = $(base.inputElementsName);
      base.hidePassword = $(base.hidePasswordName);
      base.inputAction = $(base.inputActionName);

      return base;
  },

  setState: function (state) {
    var base = this,
          elem = null;

      if (!state) {
          state = 0;
      }

      if (base.tabsElement) {
        elem = $(base.tabsElement[state]);
          elem.addClass("current");
          $("." + elem.attr("data-tabtar")).addClass("show");
      }

      return base;
  },

  getActiveTab: function () {
      var base = this;

      base.tabsElement.each(function (i, el) {
         if ($(el).hasClass("current")) {
             base.activeTab = $(el);
         }
      });

      return base;
  },

  addClickEvents: function () {
    var base = this;

      base.hidePassword.on("click", function (e) {
          var $this = $(this),
              $pwInput = $this.prev("input");

          if ($pwInput.attr("type") == "password") {
              $pwInput.attr("type", "text");
              $this.text("Ocultar");
          } else {
              $pwInput.attr("type", "password");
              $this.text("Ver");
          }
      });

      base.tabsElement.on("click", function (e) {
          var targetTab = $(this).attr("data-tabtar");

          e.preventDefault();
        /*  base.activeTab.removeClass("current");
          base.activeTab = $(this);
          base.activeTab.addClass("current");

          base.tabElement.each(function (i, el) {
              el = $(el);
              el.removeClass("show");
              if (el.hasClass(targetTab)) {
                  el.addClass("show");
              }
          });*/
      });

      base.inputElements.find("label").on("click", function (e) {
         var $this = $(this),
             $input = $this.next("input");

          $input.focus();
      });

      base.inputAction.find("button").on("click", function(e) {
        /*var $this = $(this);
        var action = $(".simform").attr("action");
        var method = $(".simform").attr("method");
        var form = $("form").serialize();

        //action: $(this),
        //method: $(this).attr("method"),
        $.ajax({
          type        : method, // define the type of HTTP verb we want to use (POST for our form)
          url         : action, // the url where we want to POST
          //data        : formData, // our data object
          dataType    : 'json', // what type of data do we expect back from the server
          encode      : true,
          beforeSend  : function(){
            alert(action)
          },
          success     : function(){
            alert(method)
          }
        }).done(function(data){

        });
        e.preventDefault();*/
      });

      base.inputAction.find("a").on("click", function(e) {
          var $this = $(this);
          alert("Oh! No funciono aún");
          e.preventDefault();
      });
      return base;
  },

  initialize: function () {
      var base = this;

      base.findElements().setState().getActiveTab().addClickEvents();
  }
};

$(document).ready(function() {
  $("#nav section").css("height",$(window).height() - 67);

  LoginModalController.initialize();

  $("#form").on("submit",function(e){
    e.preventDefault();
    var form = $(".simform");
    var action = form.attr("action");
    var method = form.attr("method");
    var formData = {};

    form.find("input,select").not(':input[type=button], :input[type=submit], :input[type=reset]').each(function() {
      formData[$(this).attr("name")] = $(this).val();
    });console.log(formData)
    $.ajax({
      type        : method,
      url         : action,
      data        : formData,
      beforeSend  : function(){
      },
      success     : function(data){

      }
    }).done(function(data){
      var elem = JSON.parse(data);
      if(elem.obj) {
        //location.reload();
        window.location.href = "login";
      }
    });
    return false;
  });

  // ------

  $("#menu").click(function(){
    $("#modal").show();
    $("#nav").fadeIn();
  });
  $("#modal,#nav nav button").click(function(){
    $("#modal").hide();
    $("#nav").hide();
  });
  //----
  $("span.new").click(function(){
    var modal = $(this).data("modal");
    $('#'+modal).modal();
  });

  $("a[data-next]").click(function(){
    var div = $(this).data("next");
    var bool = true;
    $("#modal-1").find("input,select").not(':input[type=button], :input[type=submit], :input[type=reset]').each(function() {
      if($(this).val() == "") {
        bool = false;
        $(this).parent().find("label").addClass("text-danger");
      }
    });
    if(bool) {
      $("#"+div).show();
      $(this).parent().parent().hide();
    }
  });
  $("a[data-prev]").click(function(){
    var div = $(this).data("prev");
    $("#"+div).show();
    $(this).parent().parent().hide();
  })
  $("#persona").change(function(){
    if($(this).val() == "") {
      $("div[data-persona='nueva']").show();
    } else {
      $("div[data-persona='nueva']").hide();
    }
  });
  //
  $("#dataRegister form").submit(function(e){

  })
});
