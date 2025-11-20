<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 7 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 6 Hexadecimal Number System (Base-16)">
    <link rel="stylesheet" href="../../../../css/modules/digilogic/mod7/practice7.css?php echo time(); ?>">
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
                <h2 class="section-heading">I. Hex → Decimal Conversion</h2>
                <p>Convert the following hexadecimal numbers to decimal:</p>
                <p>a. 2F<sub>16</sub></p>
                <p>b. A7<sub>16</sub></p>
                <p>c. 1C3<sub>16</sub></p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Section II -->
            <div class="lesson-section">
                <h2 class="section-heading">II. Decimal → Hexadecimal Conversion</h2>
                    <p>a. 156<sub>10</sub></p>
                    <p>b. 999<sub>10</sub></p>
                    <p>c. 4095<sub>10</sub> </p>

                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Section III -->
            <div class="lesson-section">
                <h2 class="section-heading">III. Hexadecimal ↔ Binary Conversion</h2>

                    <p>a. Convert B4<sub>16</sub>  to binary..</>
                    <p>b. Convert 101111101011<sub>2</sub> to hexadecimal.</p>
                    <p>c. Convert 3F<sub>16</sub> to decimal (fraction included).</p>

                    <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>
            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>
</body>
</html>
