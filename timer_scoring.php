<script>
    $(document).ready(function() {

        var duration = 30; // Setting time to 30 sec
        var display = $('#timer');
        var timer = duration;
        var minutes = 0;
        var seconds = 0;

        var countdownInterval = setInterval(function() { // Repeating the function again and again in 1000 milisecond interval
            minutes = parseInt(timer / 60, 10); //The parseInt function converts the result of the division into an integer.
            seconds = parseInt(timer % 60, 10); //The second argument, 10, specifies that the number should be parsed in base 10 (decimal).

            minutes = minutes < 10 ? "0" + minutes : minutes; // condition ? expressionIfTrue : expressionIfFalse;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.text(minutes + ":" + seconds);

            if (--timer < 0) {
                clearInterval(countdownInterval); //stops the interval that was set by setInterval.
                $('#submitBtn').click();
            }
        }, 1000);



        var correctAnswers = {
            ques1: "<?php echo $arr1[1]; ?>",
            ques2: "<?php echo $arr2[1]; ?>",
            ques3: "<?php echo $arr3[1]; ?>",
        };

        $("#submitBtn").on("click", function() {
            clearInterval(countdownInterval); //stops the interval that was set by setInterval.
            var score = 0;
            $(this).hide();
            $("#confirmBtn").show();


            $('input[type="radio"]:checked').each(function() { // for each click input button the below function will work
                var questionName = $(this).attr("name");
                var userAnswer = $(this).val();
                inputElement = $(
                    "input[value='" + correctAnswers[questionName] + "']"
                );
                // "input[value='correct answer']" let the correct answer is A.
                // So it will find all the input tag that having value A.



                // Get the parent tr and add the class "correct-answer"
                inputElement.closest("tr").addClass("correct-answer");
                if (userAnswer === correctAnswers[questionName]) {
                    score++;
                }
            });


            $('<input>').attr({ // Defining a variable and send it to the form
                type: 'hidden',
                name: 'score',
                value: score
            }).appendTo('#quizForm');


            $("#result").text(`You got ${score} out of 3 questions right!`);



        });
    });
</script>