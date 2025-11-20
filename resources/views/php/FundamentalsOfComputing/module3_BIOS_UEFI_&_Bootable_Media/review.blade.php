<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Review | CodeHearted</title>
    <meta name="description" content="Lesson 3: Input and Output Fundamentals">
    @vite('resources/css/modules/compfund/mod3/review3.css')
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 3: BIOS/UEFI & Bootable Media</h1>

            <!-- Learning Objectives -->
            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <ul>
                    <li>Define BIOS and UEFI and explain their roles during computer startup.</li>
                    <li>Describe the functions of BIOS/UEFI including POST, boot sequence, and hardware initialization.</li>
                    <li>Identify different types of bootable media and their uses in computer servicing.</li>
                    <li>Explain the importance of bootable media in installing or troubleshooting operating systems.</li>
                    <li>Access and configure BIOS/UEFI settings safely for installation or repair purposes.</li>
                </ul>
            </section>

            <!-- Core Lesson -->
            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>BIOS/UEFI Definition</h3>
                <p>BIOS (Basic Input/Output System) and UEFI (Unified Extensible Firmware Interface) are firmware programs stored on a computer’s motherboard. They are the very first software that runs when you power on a computer. Their purpose is to initialize hardware, check system components, and hand over control to the operating system.</p>

                <ul>
                    <li><strong>BIOS-</strong> Traditional firmware, text-based, limited to older systems.</li>
                    <li><strong>UEFI-</strong> Modern replacement for BIOS, supports graphical interface, larger storage drives, and faster booting.</li>
                </ul>

                <h3>Functions of BIOS/UEFI</h3>
                <ul>
                    <li><strong>Power-On Self Test (POST):</strong> Checks memory, CPU, keyboard, and other hardware before booting.</li>
                    <li><strong>Hardware Initialization:</strong> Makes sure all components (RAM, drives, GPU) are ready.</li>
                    <li><strong>Boot Device Selection:</strong> Lets you choose where the computer loads the OS from (hard drive, USB, DVD).</li>
                    <li><strong>System Settings Management:</strong> Allows users to configure time, date, boot order, security passwords, etc.</li>
                    <li><strong>Firmware Update Support (UEFI):</strong> Allows updating to fix bugs or improve compatibility.</li>
                </ul>

                <h3>Bootable Media Definition</h3>
                <p>Bootable media is any storage device prepared to start (boot) a computer. It contains essential files and instructions to load an operating system or troubleshooting environment.</p>
                <p>Examples:</p>

                <div class="image-center">
                    <img src="../../../../../public/css/modules/compfund/mod3/images/tools2.png" alt="Bootable Media" class="image-center">
                </div>

                <ul>
                    <li><strong>USB Flash Drive (Bootable):</strong> Most common; used to install Windows, Linux, or diagnostic tools.</li>
                    <li><strong>CD/DVD (Bootable):</strong> Older but still used in some systems.</li>
                    <li><strong>External Hard Drive (Bootable):</strong> Can store full OS environments.</li>
                    <li><strong>Network Boot (PXE):</strong> Boots a computer over a network connection.</li>
                </ul>

                <h3>Importance of Bootable Media in CSS</h3>
                <ul>
                    <li>Used for installing operating systems (Windows, Linux, etc.).</li>
                    <li>Essential for troubleshooting when the main OS is corrupted.</li>
                    <li>Provides access to diagnostic tools (disk checkers, memory tests, antivirus).</li>
                    <li>Allows technicians to recover data from damaged systems.</li>
                </ul>

            </section>

            <!-- References -->
            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>HP. (2025, February 13). What is UEFI? Understanding Your PC’s Core Technology. HP Tech Takes. https://www.hp.com/hk-en/shop/tech-takes/post/what-is-uefi HP </li>
                    <li>NameHero. (2024, April 10). Understanding The Differences: UEFI vs. BIOS. NameHero. https://www.namehero.com/blog/understanding-the-differences-uefivs-bios/NameHero </li>
                    <li>Wright, G. (2021, July 26). What is Preboot Execution Environment (PXE) and does it … TechTarget. https://www.techtarget.com/searchnetworking/definition/PrebootExecution-Environment techtarget.com</a></li>
                    <li>Lenovo. (n.d.). What is a boot device & why is it important? Lenovo Glossary. https://www.lenovo.com/us/en/glossary/what-is-boot-device/Lenovo </li>
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
