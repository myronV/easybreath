$(document).ready(function(){
	if (!checkDate()){
		$("#rc-recall span").css({
			"font-size": "13px"
		});
		$("#rc-recall span").text("Мы перезвоним в рабочее время");
	}
	setTimeout(function(){
		$("#rc-phone").removeClass("rc-inactive");
		$("#rc-phone").addClass("rc-expanded");
	}, 7000);
	$("#rc-phone-input").inputmask("+38 (999) 999-99-99");
	$("#rc-phone").click(function(){
		$(this).removeClass("rc-inactive");
		$(this).addClass("rc-expanded");
	});
	$("#rc-phone-form-close").click(function(e){
		e.stopPropagation();
		$("#rc-phone").addClass("rc-inactive");
		$("#rc-phone").removeClass("rc-expanded");
	});
	$("#rc-phone-button").click(function(e){
		e.stopPropagation();
		var clientPhone = $("#rc-phone-input").val();
		var clientCity = $("#userCity").val();
		var clearClientPhone = clientPhone.replace(/[_+() -]/g, "");
		//alert (clientPhone);
		//alert (clearClientPhone);
		//alert (clearClientPhone.length);
        if (clearClientPhone.length != 12){
            $("#rc-phone-field").css({
                "border": "2px solid",
                "border-color": "#d8512d",
				"margin-top": "0em",
				"margin-left": "-0.1em",
				"margin-right": "-0.1em"
            });
            setTimeout(function(){
                $("#rc-phone-field").removeAttr("style");
            }, 700);
		} else if (clearClientPhone.length == 12) {
			var code = clearClientPhone.slice(2, -7);
			var operator = ["039", "050", "063", "066", "067", "068", "091", "092", "093", "094", "095", "096", "097", "098", "099", "031", "032", "033", "034", "035", "036", "037", "038", "041", "042", "043", "044", "045", "046", "047", "048", "049", "051", "052", "053", "054", "055", "056", "057", "058", "059", "061", "062", "063", "064", "065", "069"];
			//alert (code);
			//alert (operator.indexOf(code));
			if (operator.indexOf(code) == -1){
				$("#rc-phone-field").css({
                "border": "2px solid",
                "border-color": "#d8512d",
				"margin-top": "0em",
				"margin-left": "-0.1em",
				"margin-right": "-0.1em"
				});
				setTimeout(function(){
					$("#rc-phone-field").removeAttr("style");
				}, 700);
			} else {
				$('#rc-phone').removeClass("rc-expanded");
				if (checkDate()){
					$("#rc-phone").addClass("rc-inactive rc-dial-progress rc-dial-shown rc-dial-shown-long");
					var url = "zakaz.php";
					start_countdown();
				} else {
					var url = "zakaz.php";
					$("#rc-phone").addClass("rc-inactive rc-dial-shown rc-dial-shown-long rc-dial-success");
					setTimeout(function(){
						$("#rc-phone").fadeOut();
					}, 5000);
				}
				$.ajax({
					url: url,
					dataType: "json",
					type: "POST",
					data: "phone=" + clientPhone + "&city=" + clientCity,
					processData: false,
					success: function(data){},
					error: function(data){}
				});
			}
        } else {
            
        }
	});

	function simple_timer(milliseconds, block, direction){
		var time = milliseconds;
		direction = direction || false;
		var seconds = Math.floor(time / 1000);
		if (seconds == 0){
			seconds = "00"
		} else if (seconds < 10){
			seconds = "0" + seconds
		};
		var millisec = (time - seconds * 1000) / 10;
		if (millisec == 0){
			millisec = "00"
		} else if (millisec < 10){
			millisec = "0" + millisec
		};
		block.text("00:" + seconds + ":" + millisec);
		if (direction){
			time += 10;
			setTimeout(function(){
				simple_timer(time, block, direction);
			}, 10);
		} else {
			time -= 10;
			if (time >= 0){
				setTimeout(function(){
					simple_timer(time, block, direction);
				}, 10);
			}
		}
	}

	function start_countdown(){
		var block = $("#rc-phone-dial-timer span");
		simple_timer(30300, block);
		setTimeout(function(){
			$("#rc-phone").addClass("rc-dial-success");
			setTimeout(function(){
				$("#rc-phone").fadeOut();
			}, 5000);
		}, 54260);
	}

	function checkDate(){
		var result = true;
		var currentdate = new Date();
		var day = currentdate.getDay();
		var time = currentdate.getHours();
		if ((day != 0 && day != 6 && (time < 9 || time >= 20)) || ((day == 0 || day == 6)) && (time < 10 || time >= 19)){
			result = false;
		}
		return result;
	}
});