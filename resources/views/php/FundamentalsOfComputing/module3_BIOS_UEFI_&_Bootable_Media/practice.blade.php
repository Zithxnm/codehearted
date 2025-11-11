<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 3 Practice Problems - Basic Input/Output, Type Conversion, and String Formatting">
    <link rel="stylesheet" href="{{asset('css/modules/compfund/mod3/practice3.css')}}?v={{ time(); }}">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 3: Practice Problems</h1>

            <!-- Section I -->
            <div class="lesson-section">
                <h2 class="section-heading">I. Identification</h2>
                <p class="instruction">Write the correct term for each statement.</p>

                <div class="fill-lines">
                    <p>The very first software that runs when you power on a computer; it initializes hardware and hands control to the operating system.</p>
                    <input type="text" class="answer-input wide">

                    <p>A modern replacement for BIOS that supports a graphical interface, faster booting, and larger storage drives.</p>
                    <input type="text" class="answer-input wide">

                    <p>The process performed by BIOS/UEFI that checks hardware like memory, CPU, and keyboard before booting the system.</p>
                    <input type="text" class="answer-input wide">
                </div>
            </div>

            <!-- Question 1 -->
            <div class="lesson-section">
                <h2 class="section-heading">II. Multiple Choice</h2>
                <p class="instruction">Choose the correct answer for each question.</p>
                <p class="question">1. Which of the following is the first software that runs when you turn on a computer?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> Operating System</label></li>
                    <li><label><input type="radio" name="q1"> BIOS/UEFI</label></li>
                    <li><label><input type="radio" name="q1"> Boot Loader</label></li>
                    <li><label><input type="radio" name="q1"> Device Driver</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. The Power-On Self Test (POST) performed by BIOS/UEFI is used to:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Install the operating system</label></li>
                    <li><label><input type="radio" name="q2"> Check and initialize hardware components before booting</label></li>
                    <li><label><input type="radio" name="q2"> Clean the computer’s memory</label></li>
                    <li><label><input type="radio" name="q2"> Configure display settings</label></li>
                </ul>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. What type of bootable media is most commonly used today to install operating systems or run diagnostic tools?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> CD/DVD</label></li>
                    <li><label><input type="radio" name="q3"> Network Boot (PXE)</label></li>
                    <li><label><input type="radio" name="q3"> USB Flash Drive</label></li>
                    <li><label><input type="radio" name="q3"> External Hard Drive</label></li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. A Network Boot (PXE) allows a computer to start up using:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> A USB device</label></li>
                    <li><label><input type="radio" name="q1"> A local hard drive</label></li>
                    <li><label><input type="radio" name="q1"> A CD/DVD</label></li>
                    <li><label><input type="radio" name="q1"> A network connection</label></li>
                </ul>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. Why is bootable media important in Computer System Servicing (CSS)?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> It increases the computer’s speed</label></li>
                    <li><label><input type="radio" name="q2"> It is used for entertainment purposes</label></li>
                    <li><label><input type="radio" name="q2"> It allows technicians to install, troubleshoot, and recover systems</label></li>
                    <li><label><input type="radio" name="q2"> It prevents malware from infecting the BIOS</label></li>
                </ul>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>
</body>

</html>
