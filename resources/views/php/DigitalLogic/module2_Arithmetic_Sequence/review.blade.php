<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 Review | CodeHearted</title>
    <meta name="description" content="Lesson 2">
    <link rel="stylesheet" href="{{asset('css/modules/digilogic/mod2/review2.css')}}?v={{ time(); }}">
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 2: Arithmetic Sequences</h1>
            <p>An arithmetic sequence (also called an arithmetic progression, “AP”) is a list of numbers in which the difference between any two successive (consecutive) terms is constant. That constant is called the common difference. Arithmetic sequences appear in many real-life situations: regular salary increases, consistent growth or decline, step increments, etc.</p>

            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students should be able to:</p>
                <ul>
                    <li>Define what an arithmetic sequence is; identify its first term and common difference.</li>
                    <li>Distinguish arithmetic sequences from other types of sequences.</li>
                    <li>Use the nth term formula to find any term in an arithmetic sequence.</li>
                    <li>Use both forms of the sum formula (one using a<sub>1</sub> and d, another using a<sub>1</sub> and a<sub>n</sub>).</li>
                    <li>Solve problems involving arithmetic sequences in real-life contexts (e.g. financial, positional patterns).</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

               <ul>
                <li><strong>First term</strong> a<sub>1</sub> (or sometimes just a)</li>
                <li><strong>Common difference</strong> d (can be positive, negative, or zero) </li>
                <li>Sequence notation: a1, a2, a3, …, an, …</li>
                <li><strong>Nth term formula:</strong> a<sub>n</sub> = a<sub>n-1</sub> + d </li>
                <li><strong>Recursive formula:</strong> a<sub>n</sub> = a<sub>(n-1)</sub> + d</li>
                <li><strong>Sum of first n terms,</strong> two equivalent formulas:</li>
                    <p>S<sub>n</sub> = <sup>n</sup>&frasl;<sub>2</sub>[2a<sub>1</sub> + (n − 1)d] or S<sub>n</sub> = <sup>n</sup>&frasl;<sub>2</sub>(a<sub>1</sub> + a<sub>n</sub>)</p>
                <li>How to find ddd, how to find nnn, or a<sub>n</sub> depending on what's given.</li>

                <h3>Detailed Explanations & Examples</h3>
                <h4>What makes a sequence arithmetic</h4>
                <p>A sequence is arithmetic if: </p>

                <ul>
                    <li>There is a constant difference d such that for all k ≥ 2, a <sub>k</sub> - a <sub> k-1 </sub> = d </li>
                    <li>Example: 3, 6, 9, 12, 15, … has a<sub>1</sub> = 3, d = 3. </li>
                    <li> Example of negative or decreasing: 80, 75, 70, 65, … has a<sub>1</sub> = 80, d = -5</li>
                </ul>

                <h4>Nth Term (General Term)</h4>

                <ul>
                    <li>If you know a<sub>1</sub> and d, you can find any term a<sub>n</sub> by a<sub>n</sub> = a<sub>1</sub> + (n-1) d </li>
                    <li>Example: For the sequence 3, 6, 9, 12, …, a<sub>1</sub> = 3, d = 3. Then:</li>
                    <p> a<sub>5</sub> = 3 + (5-1) ⋅ 3 = 3 + 12 = 15</p>
                    <li>If given a later term instead of a<sub>1</sub>  , you can still find a<sub>1</sub>  or n by manipulating the formula.</li>

                </ul>

                <h4>Sum of Terms (arithmetic Series)</h4>
                <ul>
                    <li>Definition: the sum of the first n terms of an arithmetic sequence is called an arithmetic series</li>
                    <li>Two useful formulas:</li>
                    <p>1. S<sub>n</sub> = <sup>n</sup>&frasl;<sub>2</sub> [2a<sub>1</sub>+(n-1)d]</p>
                    <p>(use this when you know a<sub>1</sub>,d,n)</p>
                    <p>2. S<sub>n</sub>= <sup>n</sup>&frasl;<sub>2</sub> (a<sub>1</sub>+a<sub>n</sub>)</p>
                    <p>(use this if you know a<sub>1</sub>  and a<sub>n</sub>  and n)</p>
                    <li><strong>Derivation sketch:</strong> Summing forwards and backwards, adding term-pairs that each add to the same total, then solving for S<sub>n</sub>.</li>
                    <li>Example: Salary increase problem from Cuemath: If someone starts earning $200,000 and each year gets $25,000 more, calculate total earnings in first 5 years:</li>
                    <li>a<sub>1</sub> = 200,000, d = 25,000, n = 5</li>
                    <li>S<sub>5</sub> = <sup>5</sup>&frasl;<sub>2</sub> [2 (200,000) + (5-1) (25,000)]</li>
                    <li>Evaluate: = <sup>5</sup>&frasl;<sub>2</sub> [400,000+100,000]= <sup>5</sup>&frasl;<sub>2</sub> ⋅ 500,000 = 1,250,000</li>
                </ul>
                <h3>Some Example Problems</h3>
                <li>Example 1: Sequence: −5, −72, −2, … <br>Find a<sub>n</sub>.</li>

                <ul>
                    <li>Here, a<sub>1</sub>= -5.</li>
                    <li>d= -<sup>7</sup>&frasl;<sub>2</sub> - (-5) = <sup>-7</sup>&frasl;<sub>2</sub> + <sup>10</sup>&frasl;<sub>2</sub> = <sup>3</sup>&frasl;<sub>2</sub>.</li>
                    <li>So a<sub>n</sub> = -5 + (n-1) ⋅ <sup>3</sup>&frasl;<sub>2</sub>.<i>Simplify if needed</i></li>
                </ul>

                <li>Example 2: Which term of −3, −8, −13, −18, … is -248?</li>

                <ul>
                    <li>a<sub>1</sub> = -3, d = -5.</li>
                    <li>Solve a<sub>n</sub>= -248: -3 + (-5) = -248 → -5(n-1) = -245 → n-1 = 49 → n = 50.</li>
                </ul>

                <li>	Example 3: Sum of -3 , -8, -13, -18, …, -248 (50 terms)</li>

                <ul>
                    <li>Use S<sub>n</sub>=<sup>n</sup>&frasl;<sub>2</sub> (a<sub>1</sub>+a<sub>n</sub> ) → S<sub>50</sub>=<sup>50</sup>&frasl;<sub>2</sub> (-3 + (-248))=25 ⋅ (-251)= -6275.</li>
                </ul>
            <!-- References -->
            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li><a href="https://www.cuemath.com/algebra/arithmetic-sequence/" target="_blank">https://www.cuemath.com/algebra/arithmetic-sequence/ </a></li>
            </section>

            <!-- Navigation Buttons -->
            <div class="lesson-nav">
                <a href="practice.php?module=2" class="action-button">Go to Practice</a>
                <a href="quiz.php?module=2" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>

        </div>
    </main>
</body>

</body>

</html>
