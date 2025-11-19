<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 6 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 6 Practice Decimal Number System">
    <link rel="stylesheet" href="../../../../css/modules/digilogic/mod6/practice6.css?php echo time(); ?>">
</head>
<style>
        textarea {
            width: 100%;
            height: 70px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 8px;
            resize: none;
        }
        </style>
<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 6: Practice Problems</h1>

            <!-- Section I -->
            <div class="lesson-section">
                <h2 class="section-heading">I. Place Value & Expanded Form</h2>
                <p>a. Write the expanded form of 4,307.082. </p>
                <p>b. What is the digit in the thousandths place of 62.4078? </p>
                <p>c. Write 9,050.6 in expanded form. </p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Section II -->
            <div class="lesson-section">
                <h2 class="section-heading">II. Compare & Order Decimals</h2>
                    <p>a. Which is larger: 5.703 or 5.73?</p>
                    <p>b. Order the following from smallest to largest:<br>8.09, 8.1, 8.009, 8.90</p>

                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Section III -->
            <div class="lesson-section">
                <h2 class="section-heading">III. Rounding & Arithmetic</h2>

                    <p>a. Round 17.856 to 1 decimal place.</>
                    <p>b. Round 99.995 to the nearest whole number..</p>
                    <p>c. Compute: 12.3 + 5.47 − 0.58</p>

                    <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>
            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>
</body>
</html>
