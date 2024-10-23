$(document).ready(function() {
	$("body").ihavecookies({
		
    title: "Принимаете файлы cookie и политику конфиденциальности?",
    message:
      "Мы используем файлы cookie, чтобы вам было удобнее пользоваться нашим сайтом. Продолжая им пользоваться, вы соглашаететсь на обработку персональных данных.",
    delay: 600,
    expires: 360,
    link: "#privacy",
    cookieCustomiseTitle: false,

    onAccept: function () {
      var myPreferences = $.fn.ihavecookies.cookie();
      console.log("Ура! Были сохранены следующие настройки...");
      console.log(myPreferences);
    },
    uncheckBoxes: true,
    acceptBtnLabel: "Ладно",
    moreInfoLabel: "",
  });

	if ($.fn.ihavecookies.preference('marketing') === true) {
		console.log('Это должно сработать, потому что маркетинг принят.');
	}
});