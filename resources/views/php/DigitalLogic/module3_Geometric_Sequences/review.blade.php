<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Review | CodeHearted</title>
    <meta name="description" content="Lesson 3: Geometric Sequences">
    @vite('resources/css/modules/digilogic/mod3/review3.css')
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 3: Geometric Sequences</h1>
            <p>A <strong>geometric sequence</strong> (or geometric progression) is a sequence of numbers where each term after the first is obtained by multiplying the previous term by a fixed, nonzero number called the <strong>common ratio</strong> (<i>r</i>).
                Geometric sequences are used in many areas: compound interest, population growth, computer science (divide-and-conquer recurrences), and more.</p>
            <!-- Learning Objectives -->
            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students  will be able to:</p>

                <p>1.	Define a geometric sequence and identify its <strong>initial term</strong> and <strong>common ratio</strong>.</p>
                <p>2.	Write a recursive formula and a <strong>closed-form</strong> (explicit) formula for a geometric sequence.</p>
                <p>3.	Compute any term of a geometric sequence directly using the closed-form formula.</p>
                <p>4.	Calculate the <strong>sum of a finite geometric sequence</strong>.</p>
                <p>5.	Recognize real-life applications of geometric sequences.</p>

            </section>

            <!-- Core Lesson -->
            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <ul>
                    <li> <strong>Initial term</strong> (a0a_0a0 or a1a_1a1): the first term of the sequence.</li>
                    <li><strong>Common ratio</strong> (rrr): the constant factor between consecutive terms.</li>
                    <li>Recursive definition:  a<sub>n</sub> =  r .  a<sub>n</sub> – a  with initial term a<sub>0</sub> or (a<sub>1</sub>)</li>
                    <p><strong>Forms of a Geometric Sequence</strong></p>
                    <li><strong>Closed-form definition (starting from a<sub>0</sub>):</strong> a<sub>n</sub> = a<sub>n</sub> . r<sup>n-1</sup> </li>
                    <li><strong>Closed-form definition (starting from a<sub>1</sub>):</strong> a<sub>n</sub> = a<sub>1</sub> . r<sup>n-1</sup> </li>

                <h3><strong>Detailed Explanation & Examples</strong></h3>
                <p><strong> Identifying a Geometric Sequences,</strong><p>
                    <p>A sequence is geometric if the ratio between consecutive terms is constant:</p>

                        <p> <sup>a<sub>1</sub></sup> &frasl; a<sub>0</sub> = <sup>a<sub>2</sub></sup> &frasl; a<sub>1</sub> = <sup>a<sub>3</sub></sup> &frasl; a<sub>2</sub> = ... = r </p>
                    <p><strong>Example:</strong></p>
                    <p>Sequence: 3, 6, 12, 24, 48, . . .</p>
                    <ul>
                        <li>Common ratio r = 6/3 = 2 </li>
                        <li>Recursive: a<sub>n</sub> = 2 . a<sub>n-1</sub>, a<sub>0</sub> = 3 </li>
                        <li>Closed-form: a<sub>n</sub> = 3 . 2<sup>n</sup> </li>
                    </ul>

                    <h4><strong> Finding a Specific Term</strong></h4>
                    <p>You can find the nnn-th term without computing all previous terms using:</p>
                        <p> a<sub>n</sub> = a<sub>0</sub> . r<sup>n</sup> </p>

                    <p><strong>Example:</strong> <br>Given a<sub>0</sub> = 5, r = 3, find a<sub>4</sub></p>

                        <p> a<sub>4</sub> = 5 . 3<sup>4</sup></p>

                    <h4>Finite Sum of a Geometric Sequence</h4>
                        <p>If there are n + 1n + 1n + 1 terms (from a<sub>0</sub> to a<sub>n</sub>):</p>
                        <p> 2 = a<sub>0</sub> + a<sub>0</sub>r + a<sub>0</sub>r<sup>2</sup> + … + a<sub>0</sub>r<sup>2</sup> = a<sub>0</sub>
                            <span style="display:inline-block; text-align:center;">
                            <span style="border-bottom:1px solid black; display:block;">
                                r<sup>n+1</sup> − 1
                            </span>
                                r − 1
                            </span>
                                , r ≠ 1
                            </p>

                    <p><strong>Example:</strong> <br>Find the sum of 2 + 4 + 8 + 16 + 32.</p>
                    <ul>
                        <li>a<sub>0</sub> = 2, r = 2, n = 4</li>
                    </ul>
                    <p> S = 2 .
                        <span style="display:inline-block; text-align:center;">
                        <span style="border-bottom:1px solid black; display:block;">
                                2<sup>5</sup> − 1
                            </span>
                                2 − 1
                            </span>
                            2 . (32 – 1) = 2 . 31 = 62
                            </p>

                    <p><strong>Real-Life Example</strong></p>
                    <p><strong>Compound Interest:</strong> <br>If you deposit $1000 in a bank account with 5% interest compounded yearly, the amount after <i>n</i> years is:</p>
                        <p>A<sub>n</sub> = 1000 . (1.05)<sup>n</sup></p>
                        <p>This is a geometric sequence with a<sub>o</sub> = 1000, r = 1.05</p>

            <!-- References -->
            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li><a href="https://discrete.openmathbooks.org/dmoi2/sec_seq-arithgeom.html" target="_blank">https://discrete.openmathbooks.org/dmoi2/sec_seq-arithgeom.html</a></li>

                </ul>
            </section>

            <!-- Navigation Buttons -->
            <div class="lesson-nav">
                <a href="practice.php?module=3" class="action-button">Go to Practice</a>
                <a href="quiz.php?module=3" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>

</html>
