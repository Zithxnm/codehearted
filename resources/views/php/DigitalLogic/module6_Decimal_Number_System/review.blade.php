<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 6 Review | CodeHearted</title>
    <meta name="description" content="Lesson 6: Decimal Number System">
    @vite('resources/css/modules/digilogic/mod6/review6.css')
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 6: Decimal Number System</h1>
            <p>The decimal number system (base-10) is the standard system for denoting integer and nson-integer numbers. It uses ten digits: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9. Each digit’s value depends on its position in the number—units, tens, hundreds, etc., to the left of the decimal point, and tenths, hundredths, thousandths, etc., to the right.
                    <br>It is used in everyday counting, measuring, financial transactions, scientific notation, etc. Understanding how decimal place-value works is essential for all arithmetic operations, number comparisons, rounding, and understanding of fractions/percentages/ratios when expressed in decimal form.</p>

            <!-- Learning Objectives -->
            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students will be able to:</p>
                <ul>
                    <li>Define the decimal system and explain what "base-10" means.</li>
                    <li>Identify and interpret the place values in a decimal number for both integer and fractional part.</li>
                    <li>Convert a number expressed by digits (with many places) into its expanded form.</li>
                    <li>Compare and order decimal numbers.</li>
                    <li>Round decimal numbers to a given place (e.g. to nearest whole number, to one decimal place, etc.).</li>
                    <li>Perform basic arithmetic operations (addition, subtraction, multiplication, division) with decimal numbers.</li>
                </ul>
            </section>

            <!-- Core Lesson -->
            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>
                    <ul>
                        <li>Terms & definitions: base, digit, place value, units/tens/hundreds; tenths, hundredths, thousandths, etc.</li>
                        <li>Explanation of the decimal “point” (decimal separator).</li>
                        <li>Expanded form representation.</li>
                        <li>Comparing decimal numbers: rules (look at highest place, align decimal points, etc.).</li>
                        <li>Rounding rules.</li>
                        <li>Arithmetic with decimals (especially ensuring alignment of decimal points).</li>
                        <li>Worked examples demonstrating each of the above.</li>
                </ul>

                    <h3>Detailed Explanation & Examples</h3>
                    <h4>Definition & Place Value</h4>

                <ul>
                    <li>Base-10 means there are ten unique digit symbols (0–9).</li>
                    <li>Positional system: the value of each digit depends on its position. For integer part: each place is 10⁰ (units), 10¹ (tens), 10² (hundreds), etc. For fractional part: places are 10⁻¹ (tenths), 10⁻² (hundredths), 10⁻³ (thousandths), etc.</li>
                </ul>

                <h4>Example: 4,325.078</h4>
                <ul>
                <li>4 is in thousands place → 4 × 10³ = 4 × 1000 = 4000 </li>
                <li>3 in hundreds → 3 × 10² = 300 </li>
                <li>2 in tens → 2 × 10¹ = 20 </li>
                <li>5 in units → 5 × 10⁰ = 5 </li>
                <li>0 in tenths → 0 × 10⁻¹ = 0.0 </li>
                <li>7 in hundredths → 7 × 10⁻² = 0.07 </li>
                <li>7 in hundredths → 7 × 10⁻² = 0.07 </li>
                 </ul>
                 <p>So expanded form: <br> 4 000 + 300 + 20 + 5 + 0.07 + 0.008 </p>

                 <h4>Comparing & Ordering Decimals</p>

                <ul>
                    <li>To compare two decimal numbers: first compare integer parts; if equal, compare tenths; if equal, hundredths; and so on. </li>
                    <li>It helps to write them with the same number of decimal places (by appending trailing zeros). </li>
                    <p><strong>Example:</strong> Which is larger: 3.2 or 3.15?</p>
                    <li>3 (integer part) same. Tenths: 2 vs 1 ⇒ 3.2 > 3.15. </li>
                </ul>
                <p>Example: Order these from smallest to largest: 5.003, 5.03, 5.0003, 5.1</p>

                <h4>Rounding Decimals</h4>
                <ul>
                    <li>Decide the place to which you round (whole number, tenths, hundredths, etc.). </li>
                    <li>Look at the digit immediately to the right of that place: if it is ≥5, round up; else, round down (leave the digit as is). </li>
                </ul>
                <p><strong>Example:</strong> Round 7.8642 to two decimal places → look at thousandths digit (4): since 4 < 5, it stays → 7.86</p>
                <p><strong>Example:</strong> Round 2.376 to one decimal place → look at hundredths (7) ≥5 → 2.4</p>

                <h4>Arithmetic with Decimal Numbers</h4>
                <ul>
                    <li>Addition / Subtraction: align decimal points; pad with zeros when necessary to same number of decimal places; compute as with whole numbers, then place the decimal point in result. </li>
                    <li>Multiplication: multiply as if they were integers (ignoring decimal points); count total number of decimal places in factors; place decimal in product so that it has that many decimal places. </li>
                    <li>Division: either shift decimal points in divisor and dividend to make divisor a whole number; or use long division technique. </li>
                </ul>
                <p><strong>Example (Addition):</strong> 12.45 + 3.7 = <br> Align: 12.45 + 3.70 = 16.15</p>
                <p><strong>Example (Multiplication):</strong> 2.5 × 0.4 → treat as 25 × 4 = 100; total decimal places = 1 + 1 = 2 → 1.00</p>
                <p>Example (Division): 3.6 ÷ 0.3 → multiply numerator & denominator by 10 to remove decimal in divisor → (3.6×10)/(0.3×10) = 36 ÷ 3 = 12</p>



            <!-- References -->
            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li><a href="Reference: https://byjus.com/maths/decimal-number-system//" target="_blank">Reference: https://byjus.com/maths/decimal-number-system/</a></li>
                </ul>
            </section>

            <!-- Navigation Buttons -->
            <div class="lesson-nav">
                <a href="{{ route('digilogic.mod6.practice') }}" class="action-button">Go to Practice</a>
                <a href="{{ route('digilogic.mod6.quiz') }}" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>

</html>
