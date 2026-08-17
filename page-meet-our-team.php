<?php
/*
 Template Name: Meet Our Team
*/

get_header(); 
?>

<div class="page-attributes">
<section class="hero-attorneys">
        <div class="hero-content">
            <h1>Meet Our Team</h1>
            <p>Decades of trial experience dedicated to protecting your future.</p>
        </div>
    </section>

    <section class="team-section">
        
        <div class="team-header">
            <h2 class="section-title">The Legal Team</h2>
            <p class="section-subtitle">A multidisciplinary force led by industry veteran Bob Nehoray.</p>
        </div>

        <div class="founder-card">
            <div class="founder-img-col">
                <div class="founder-img-wrapper">
                    <div class="founder-frame"></div>
                    <img src="/wp-content/themes/nehoray-law/assets/img/BobNehoray.jpg" 
                         alt="Bob Nehoray" 
                         class="founder-photo">
                </div>
            </div>

            <div class="founder-info-col">
                <h3 class="founder-name">Bob Nehoray
                    <a class="founder-ig" href="https://www.instagram.com/kingofworkcomp?igsh=cG1kbW95bmJsYmI0" target="_blank" rel="noopener noreferrer" aria-label="Bob Nehoray on Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        <span>@kingofworkcomp</span>
                    </a>
                </h3>
                <div class="founder-role">Founder & Lead Attorney</div>
                
                <h4 class="founder-quote">"The experience gained from working at a defense firm allows me to analyze cases from the perspective of the opposing party."</h4>
                
                <p class="founder-bio">
                    Mr. Nehoray began his career at a defense firm, gaining keen insight into defense strategies. He later expanded his practice to include Worker’s Compensation and specialized medical malpractice litigation. Mr. Nehoray has represented clients ranging from individuals to international corporations like R/Tex Enterprises and Cedars Sinai Medical Center. His unique business and accounting background allows him to understand the complex financial settings in which legal decisions are made.
                </p>

                <ul class="founder-stats">
                    <li><svg class="theme-check-icon-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C5A059" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Former Defense Attorney</li>
                    <li><svg class="theme-check-icon-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C5A059" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Business & Accounting Background</li>
                    <li><svg class="theme-check-icon-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C5A059" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> UCLA Law (Juris Doctor 2000)</li>
                    <li><svg class="theme-check-icon-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C5A059" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Multi-Million Dollar Settlements</li>
                </ul>
            </div>
        </div>

        <div style="text-align: center;">
            <h3 class="section-title" style="display: inline-block;">Meet Our Team</h3>
        </div>

        <!-- FILTER BAR -->
        <div class="team-filter-bar">
            <!-- Desktop: Tabs -->
            <div class="filter-row filter-desktop">
                <span class="filter-row-label">Department</span>
                <div class="filter-group" id="deptFilters">
                    <div class="filter-slider" id="deptSlider"></div>
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="attorneys">Attorneys</button>
                    <button class="filter-btn" data-filter="personal-injury">Personal Injury</button>
                    <button class="filter-btn" data-filter="workers-comp">Workers Comp.</button>
                    <button class="filter-btn" data-filter="intake">Intake</button>
                    <button class="filter-btn" data-filter="claims">Claims</button>
                    <button class="filter-btn" data-filter="medical">Medical</button>
                    <button class="filter-btn" data-filter="qme">Q.M.E.</button>
                    <button class="filter-btn" data-filter="marketing">Marketing</button>
                    <button class="filter-btn" data-filter="hr">H.R.</button>
                    <button class="filter-btn" data-filter="admin">Admin</button>
                    <button class="filter-btn" data-filter="back-office">Back Office</button>
                    <button class="filter-btn" data-filter="operations">Operations</button>
                </div>
            </div>
            <div class="filter-row filter-desktop">
                <span class="filter-row-label">Office</span>
                <div class="filter-group" id="officeFilters">
                    <div class="filter-slider" id="officeSlider"></div>
                    <button class="filter-btn active" data-office="all">All Offices</button>
                    <button class="filter-btn" data-office="headquarters">Headquarters</button>
                    <button class="filter-btn" data-office="hemet">Hemet</button>
                    <button class="filter-btn" data-office="palm-desert">Palm Desert</button>
                    <button class="filter-btn" data-office="oakland">Oakland</button>
                    <button class="filter-btn" data-office="sacramento">Sacramento</button>
                    <button class="filter-btn" data-office="san-diego">San Diego</button>
                    <button class="filter-btn" data-office="bakersfield">Bakersfield</button>
                    <button class="filter-btn" data-office="modesto">Modesto</button>
                </div>
            </div>

            <!-- Mobile: Dropdowns -->
            <div class="filter-mobile">
                <div class="filter-mobile-row">
                    <label class="filter-mobile-label" for="deptSelect">Department</label>
                    <select class="filter-select" id="deptSelect">
                        <option value="all">All Departments</option>
                        <option value="attorneys">Attorneys</option>
                        <option value="personal-injury">Personal Injury</option>
                        <option value="workers-comp">Workers Comp.</option>
                        <option value="intake">Intake</option>
                        <option value="claims">Claims</option>
                        <option value="medical">Medical</option>
                        <option value="qme">Q.M.E.</option>
                        <option value="marketing">Marketing</option>
                        <option value="hr">H.R.</option>
                        <option value="admin">Admin</option>
                        <option value="back-office">Back Office</option>
                        <option value="operations">Operations</option>
                    </select>
                </div>
                <div class="filter-mobile-row">
                    <label class="filter-mobile-label" for="officeSelect">Office</label>
                    <select class="filter-select" id="officeSelect">
                        <option value="all">All Offices</option>
                        <option value="headquarters">Headquarters</option>
                        <option value="hemet">Hemet</option>
                        <option value="palm-desert">Palm Desert</option>
                        <option value="oakland">Oakland</option>
                        <option value="sacramento">Sacramento</option>
                        <option value="san-diego">San Diego</option>
                        <option value="bakersfield">Bakersfield</option>
                        <option value="modesto">Modesto</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="team-results-count" id="teamResultsCount"></div>

        <!-- SINGLE UNIFIED GRID -->
        <div class="team-grid" id="teamFilterGrid">

            <!-- ATTORNEYS / HEARING REPS. -->
            <div class="attorney-card" data-dept="attorneys workers-comp" data-office="hemet" data-bio="Vannesa Guzman brings extensive experience in workers' compensation, with a strong commitment to client advocacy. She spent 12 years at a high-volume law firm, gaining practical knowledge and a deep understanding of the challenges injured individuals face, she pursued legal studies while working in the field, successfully passing the California Bar Examination. Today, Vannesa focuses on guiding and supporting injured workers through complex legal matters, known for a compassionate yet results-driven approach, she helps clients navigate the legal system with confidence and clarity.">
                <img src="/wp-content/themes/nehoray-law/assets/img/VannesaGuzman.jpg" alt="Vannesa Guzman">
                <div class="attorney-info">
                    <span class="attorney-role">Attorney</span>
                    <h4 class="attorney-name">Vannesa</h4>
                    <h4 class="attorney-lastname">Guzman</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="attorneys personal-injury" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/BrendenNorton.jpg" alt="Brenden Norton">
                <div class="attorney-info">
                    <span class="attorney-role">Attorney</span>
                    <h4 class="attorney-name">Brenden</h4>
                    <h4 class="attorney-lastname">Norton</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="attorneys workers-comp" data-office="oakland" data-bio="Alan Borelli is an Associate Attorney in the Workers' Compensation department at the Law Offices of Bob Nehoray. Alan has extensive experience guiding clients through every stage of the claims process, including case investigation, medical treatment coordination, settlement negotiations, and trial proceedings.|Alan brings a wealth of legal experience, prior to joining the firm, he worked as an in-house patent attorney and later served as an intellectual property consultant, advising inventors and early-stage companies on protecting and commercializing their innovations.|Alan earned his Bachelor of Arts in Religion, graduating cum laude, from Princeton University. He went on to receive his Juris Doctor from USC Gould School of Law, where he also earned a Certificate in Technology and Entrepreneurship. In addition, he holds a Master of Bioengineering from University of California, Berkeley.|Alan is admitted to the State Bar of California and is also a Registered Patent Attorney licensed to practice before the United States Patent and Trademark Office.">
                <img src="/wp-content/themes/nehoray-law/assets/img/AlanBorelli.jpg" alt="Alan Borelli">
                <div class="attorney-info">
                    <span class="attorney-role">Attorney</span>
                    <h4 class="attorney-name">Alan</h4>
                    <h4 class="attorney-lastname">Borelli</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="attorneys" data-office="palm-desert">
                <img src="/wp-content/themes/nehoray-law/assets/img/PeterBrill.jpg" alt="Peter Brill">
                <div class="attorney-info">
                    <span class="attorney-role">Attorney</span>
                    <h4 class="attorney-name">Peter</h4>
                    <h4 class="attorney-lastname">Brill</h4>
                </div>
            </div>
           <div class="attorney-card" data-dept="attorneys intake" data-office="palm-desert" data-bio="Thom Burger has spent years in the service of others. He served on submarines in the United States Navy, and spent years protecting taxpayer privacy in the Internal Revenue Service, achieving certification as a Senior Executive Service member.|While working for the IRS, Thomas fulfilled a childhood promise to himself, completing law school and subsequently passing the California Bar Examination. Thomas earned his Juris Doctor degree from Purdue Global Law School, and also earned a Master of Science degree in Data Analytics from Southern New Hampshire University, and a Bachelor of Science degree in Business Economics from Eastern Oregon University.|Thomas now continues his service of others with our firm helping to ensure the workers' compensation rights and benefits are bestowed where they are deserved.|Thomas loves all sports, watching and participating, but especially baseball.">
                <img src="/wp-content/themes/nehoray-law/assets/img/ThomasBurger.jpg" alt="Thom Burger">
                <div class="attorney-info">
                    <span class="attorney-role">Attorney</span>
                    <h4 class="attorney-name">Thom</h4>
                    <h4 class="attorney-lastname">Burger</h4>
                </div>
            </div>


            <!-- PERSONAL INJURY DEPARTMENT -->
            <div class="attorney-card" data-dept="personal-injury" data-office="headquarters" data-bio="Jackie Martinez is the Personal Injury Manager who oversees the day-to-day operations of the firm's personal injury department, ensuring that all cases progress efficiently and in alignment with the firm's standards of excellence. With 25 years of experience in the personal injury field, Jackie brings deep industry knowledge, strong leadership, and a results-driven approach to every matter she manages.|She specializes in a wide range of personal injury cases, including motor vehicle accidents, premises liability, wrongful death, and dog bite claims. Jackie's extensive background in risk management, and both pre-litigation and litigation enables her to effectively manage case strategy, anticipate challenges, and support the legal team in maximizing client recovery.|In her role, Jackie supervises case workflows, oversees documentation and discovery, and works closely with case managers, attorneys, clients, medical providers, and insurance carriers to ensure seamless case handling. Her attention to detail and organizational expertise help maintain well-developed files that are positioned for successful outcomes.">
                <img src="/wp-content/themes/nehoray-law/assets/img/JackieMartinez.jpg" alt="Jackie Martinez">
                <div class="attorney-info">
                    <span class="attorney-role">Department Manager</span>
                    <span class="attorney-role-secondary">Sr. Paralegal</span>
                    <h4 class="attorney-name">Jackie</h4>
                    <h4 class="attorney-lastname">Martinez</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="personal-injury" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/PaquitaHughes.jpg" alt="Paquita Hughes">
                <div class="attorney-info">
                    <span class="attorney-role-secondary">Litigation Paralegal</span>
                    <h4 class="attorney-name">Paquita</h4>
                    <h4 class="attorney-lastname">Hughes</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="personal-injury" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/placeholder-silhouette.png" alt="Susie M">
                <div class="attorney-info">
                    <span class="attorney-role-secondary">Sr. Paralegal</span>
                    <h4 class="attorney-name">Susie</h4>
                    <h4 class="attorney-lastname">M.</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="personal-injury" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/ChristianOlvida.jpg" alt="Christian Olvida">
                <div class="attorney-info">
                    <span class="attorney-role">Personal Injury</span>
                    <span class="attorney-role-secondary">Legal Assistant</span>
                    <h4 class="attorney-name">Christian</h4>
                    <h4 class="attorney-lastname">Olvida</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="personal-injury" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/DanielFerreiraSandoval.jpg" alt="Daniel Ferreira Sandoval">
                <div class="attorney-info">
                    <span class="attorney-role">Personal Injury</span>
                    <span class="attorney-role-secondary">Litigation</span>
                    <h4 class="attorney-name">Daniel</h4>
                    <h4 class="attorney-lastname">Ferreira Sandoval</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="personal-injury" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/MiguelAchury.jpg" alt="Miguel Achury">
                <div class="attorney-info">
                    <span class="attorney-role">Personal Injury</span>
                    <span class="attorney-role-secondary">Litigation</span>
                    <h4 class="attorney-name">Miguel</h4>
                    <h4 class="attorney-lastname">Achury</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="personal-injury" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/JuanMosquera.jpg" alt="Juan Mosquera">
                <div class="attorney-info">
                    <span class="attorney-role">Personal Injury</span>
                    <span class="attorney-role">Legal Assistant</span>
                    <h4 class="attorney-name">Juan</h4>
                    <h4 class="attorney-lastname">Mosquera</h4>
                </div>
            </div>

            <!-- WORKERS COMP. DEPARTMENT -->
            <div class="attorney-card" data-dept="workers-comp" data-office="palm-desert">
                <img src="/wp-content/themes/nehoray-law/assets/img/LorenaGarcia.jpg" alt="Lorena Garcia">
                <div class="attorney-info">
                    <span class="attorney-role">Hearing Representative</span>
                    <h4 class="attorney-name">Lorena</h4>
                    <h4 class="attorney-lastname">Garcia</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="modesto">
                <img src="/wp-content/themes/nehoray-law/assets/img/NataliePadilla.jpg" alt="Natalie Padilla">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Hearing Rep</span>
                    <h4 class="attorney-name">Natalie</h4>
                    <h4 class="attorney-lastname">Padilla</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/KianaPouromid.jpg" alt="Kiana Pouromid">
                <div class="attorney-info">
                    <span class="attorney-role">Lawyer and workers compensation operations manager</span>
                    <h4 class="attorney-name">Kiana</h4>
                    <h4 class="attorney-lastname">Pouromid</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="hemet">
                <img src="/wp-content/themes/nehoray-law/assets/img/LorenaSalas.jpg" alt="Lorena Salas">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Lorena</h4>
                    <h4 class="attorney-lastname">Salas</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="modesto">
                <img src="/wp-content/themes/nehoray-law/assets/img/VanessaPrieto.jpg" alt="Vanessa Prieto">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Vanessa</h4>
                    <h4 class="attorney-lastname">Prieto</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="palm-desert">
                <img src="/wp-content/themes/nehoray-law/assets/img/MinaHernandez.jpg" alt="Mina Hernandez">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Mina</h4>
                    <h4 class="attorney-lastname">Hernandez</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="palm-desert">
                <img src="/wp-content/themes/nehoray-law/assets/img/DianaHernandez.jpg" alt="Diana Hernandez">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Diana</h4>
                    <h4 class="attorney-lastname">Hernandez</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="sacramento">
                <img src="/wp-content/themes/nehoray-law/assets/img/CynthiaRueda.jpg" alt="Cynthia Rueda">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Cynthia</h4>
                    <h4 class="attorney-lastname">Rueda</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="oakland">
                <img src="/wp-content/themes/nehoray-law/assets/img/MonroeOakley.jpg" alt="Monroe Oakley">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Monroe</h4>
                    <h4 class="attorney-lastname">Oakley</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="sacramento">
                <img src="/wp-content/themes/nehoray-law/assets/img/MariaGray.jpg" alt="Maria Gray">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Maria</h4>
                    <h4 class="attorney-lastname">Gray</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="san-diego">
                <img src="/wp-content/themes/nehoray-law/assets/img/MarianaLopez.jpg" alt="Mariana Lopez">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Mariana</h4>
                    <h4 class="attorney-lastname">Lopez</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="bakersfield">
                <img src="/wp-content/themes/nehoray-law/assets/img/SallyAranda.jpg" alt="Sally Aranda">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Sally</h4>
                    <h4 class="attorney-lastname">Aranda</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="bakersfield">
                <img src="/wp-content/themes/nehoray-law/assets/img/NansiGarcia.jpg" alt="Nansi Garcia">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Nansi</h4>
                    <h4 class="attorney-lastname">Garcia</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="workers-comp" data-office="modesto">
                <img src="/wp-content/themes/nehoray-law/assets/img/MariaCastillo.jpg" alt="Maria Castillo">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Maria</h4>
                    <h4 class="attorney-lastname">Castillo</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="workers-comp" data-office="hemet">
                <img src="/wp-content/themes/nehoray-law/assets/img/PatrickTadros.jpg" alt="Patrick Tadros">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role">Case Manager</span>
                    <h4 class="attorney-name">Patrick</h4>
                    <h4 class="attorney-lastname">Tadros</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="workers-comp" data-office="modesto">
                <img src="/wp-content/themes/nehoray-law/assets/img/IselaRamirez.jpg" alt="Isela Ramirez">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role">Case Manager</span>
                    <h4 class="attorney-name">Isela</h4>
                    <h4 class="attorney-lastname">Ramirez</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="workers-comp" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/placeholder-silhouette.png" alt="Barbara S">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Barbara</h4>
                    <h4 class="attorney-lastname">S.</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/placeholder-silhouette.png" alt="Leroy L">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Leroy</h4>
                    <h4 class="attorney-lastname">L.</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="personal-injury" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/placeholder-silhouette.png" alt="Laura Rodriguez">
                <div class="attorney-info">
                    <span class="attorney-role">Workers' Compensation</span>
                    <span class="attorney-role-secondary">Case Manager</span>
                    <h4 class="attorney-name">Laura</h4>
                    <h4 class="attorney-lastname">Rodriguez</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/MichelleHernandez.jpg" alt="Michelle Hernandez">
                <div class="attorney-info">
                    <span class="attorney-role">Jr. Case Manager</span>
                    <h4 class="attorney-name">Michelle</h4>
                    <h4 class="attorney-lastname">Hernandez</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="bakersfield">
                <img src="/wp-content/themes/nehoray-law/assets/img/AshleyNadeau.jpg" alt="Ashley Nadeau">
                <div class="attorney-info">
                    <span class="attorney-role">Jr. Case Manager</span>
                    <h4 class="attorney-name">Ashley</h4>
                    <h4 class="attorney-lastname">Nadeau</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="workers-comp" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/EdnaBurdeos.jpg" alt="Edna Burdeos">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Edna</h4>
                    <h4 class="attorney-lastname">Burdeos</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="workers-comp" data-office="san-diego">
                <img src="/wp-content/themes/nehoray-law/assets/img/EstefanyBenitez.jpg" alt="Estefany Benitez">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Estefany</h4>
                    <h4 class="attorney-lastname">Benitez</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="hemet">
                <img src="/wp-content/themes/nehoray-law/assets/img/PatricioMarin.jpg" alt="Patricio Marin">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Patricio</h4>
                    <h4 class="attorney-lastname">Marin</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="workers-comp" data-office="palm-desert">
                <img src="/wp-content/themes/nehoray-law/assets/img/JuliebeAlfaro.jpg" alt="Juliebe Alfaro">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Juliebe</h4>
                    <h4 class="attorney-lastname">Alfaro</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="oakland">
                <img src="/wp-content/themes/nehoray-law/assets/img/BenjaminSolomon.jpg" alt="Benjamin Solomon">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Benjamin</h4>
                    <h4 class="attorney-lastname">Solomon</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="sacramento">
                <img src="/wp-content/themes/nehoray-law/assets/img/SohelTamboli.jpg" alt="Sohel Tamboli">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Sohel</h4>
                    <h4 class="attorney-lastname">Tamboli</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="workers-comp" data-office="sacramento">
                <img src="/wp-content/themes/nehoray-law/assets/img/SantiagoMoreno.jpg" alt="Santiago Moreno">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Santiago</h4>
                    <h4 class="attorney-lastname">Moreno</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="hemet">
                <img src="/wp-content/themes/nehoray-law/assets/img/JulianQuintana.jpg" alt="Julian Quintana">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Julian</h4>
                    <h4 class="attorney-lastname">Quintana</h4>
                </div>
            </div>
               
            <div class="attorney-card" data-dept="workers-comp" data-office="modesto">
                <img src="/wp-content/themes/nehoray-law/assets/img/AlejandraHerrera.jpg" alt="Alejandra Herrera">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Alejandra</h4>
                    <h4 class="attorney-lastname">Herrera</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="bakersfield">
                <img src="/wp-content/themes/nehoray-law/assets/img/DanielPuentes.jpg" alt="Daniel Puentes">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Daniel</h4>
                    <h4 class="attorney-lastname">Puentes</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="bakersfield">
                <img src="/wp-content/themes/nehoray-law/assets/img/AlejandroCaro.jpg" alt="Alejandro Caro">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Alejandro</h4>
                    <h4 class="attorney-lastname">Caro</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/JorgeVanBochove.jpg" alt="Jorge Van Bochove">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Jorge</h4>
                    <h4 class="attorney-lastname">Van Bochove</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="workers-comp" data-office="palm-desert">
                <img src="/wp-content/themes/nehoray-law/assets/img/DiegoSalcedo.jpg" alt="Diego Salcedo">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant Case Manager</span>
                    <h4 class="attorney-name">Diego</h4>
                    <h4 class="attorney-lastname">Salcedo</h4>
                </div>
            </div>

            <!-- INTAKE DEPARTMENT -->
            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/SamanthaMarten.jpg" alt="Samantha Marten">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Operations Manager</span>
                    <h4 class="attorney-name">Samantha</h4>
                    <h4 class="attorney-lastname">Marten</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="back-office" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/KambizBanayan.jpg" alt="Kambiz Banayan">
                <div class="attorney-info">
                    <span class="attorney-role">Back Office</span>
                    <span class="attorney-role-secondary">Administration Manager</span>
                    <h4 class="attorney-name">Kambiz</h4>
                    <h4 class="attorney-lastname">Banayan</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/LamarVisarraga.jpg" alt="Lamar Visarraga">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Representative</span>
                    <h4 class="attorney-name">Lamar</h4>
                    <h4 class="attorney-lastname">Visarraga</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/ValentinaRodriguez.jpg" alt="Valentina Rodriguez">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Representative</span>
                    <h4 class="attorney-name">Valentina</h4>
                    <h4 class="attorney-lastname">Rodriguez</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/RyanVelez.jpg" alt="Ryan Velez">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Support</span>
                    <h4 class="attorney-name">Ryan</h4>
                    <h4 class="attorney-lastname">Velez</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/KayeHinolan.jpg" alt="Kaye Hinolan">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Support</span>
                    <h4 class="attorney-name">Kaye</h4>
                    <h4 class="attorney-lastname">Hinolan</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="back-office" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/FlorenceBaral.jpg" alt="Florence Baral">
                <div class="attorney-info">
                    <span class="attorney-role">Back Office</span>
                    <span class="attorney-role-secondary">Administration Support</span>
                    <h4 class="attorney-name">Florence</h4>
                    <h4 class="attorney-lastname">Baral</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="back-office" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/AkashAwasarmol.jpg" alt="Akash Awasarmol">
                <div class="attorney-info">
                    <span class="attorney-role">Back Office</span>
                    <span class="attorney-role-secondary">Support</span>
                    <h4 class="attorney-name">Akash</h4>
                    <h4 class="attorney-lastname">Awasarmol</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="back-office" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/HoneymarCanuel.jpg" alt="Honeymar Canuel">
                <div class="attorney-info">
                    <span class="attorney-role">Back Office</span>
                    <span class="attorney-role-secondary">Support</span>
                    <h4 class="attorney-name">Honeymar</h4>
                    <h4 class="attorney-lastname">Canuel</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/AlexSereno.jpg" alt="Alexander Sereno">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Support</span>
                    <h4 class="attorney-name">Alexander</h4>
                    <h4 class="attorney-lastname">Sereno</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/VergienaCancilao.jpg" alt="Vergiena Cancilao">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Support</span>
                    <h4 class="attorney-name">Vergiena</h4>
                    <h4 class="attorney-lastname">Cancilao</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/DanielJuliao.jpg" alt="Daniel Juliao">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Support</span>
                    <h4 class="attorney-name">Daniel</h4>
                    <h4 class="attorney-lastname">Juliao</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/RobinsonCifuentes.jpg" alt="Robinson Cifuentes">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Support</span>
                    <h4 class="attorney-name">Robinson</h4>
                    <h4 class="attorney-lastname">Cifuentes</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="intake" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/JuanitaBello.jpg" alt="Juanita Bello">
                <div class="attorney-info">
                    <span class="attorney-role">Intake Support</span>
                    <h4 class="attorney-name">Juanita</h4>
                    <h4 class="attorney-lastname">Bello</h4>
                </div>
            </div>

            <!-- CLAIMS DEPARTMENT -->
            <div class="attorney-card" data-dept="claims" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/BryanCaranto.jpg" alt="Bryan Caranto">
                <div class="attorney-info">
                    <span class="attorney-role">Claims Department Head</span>
                    <h4 class="attorney-name">Bryan</h4>
                    <h4 class="attorney-lastname">Caranto</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="claims" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/CeazarClarito.jpg" alt="Ceazar Clarito">
                <div class="attorney-info">
                    <span class="attorney-role">Legal Assistant</span>
                    <h4 class="attorney-name">Ceazar</h4>
                    <h4 class="attorney-lastname">Clarito</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="claims" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/KevinAxlGil.jpg" alt="Kevin Gil">
                <div class="attorney-info">
                    <span class="attorney-role">Legal Assistant</span>
                    <h4 class="attorney-name">Kevin</h4>
                    <h4 class="attorney-lastname">Gil</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="claims" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/IanMarcelo.jpg" alt="Ian Marcelo">
                <div class="attorney-info">
                    <span class="attorney-role">Legal Assistant</span>
                    <h4 class="attorney-name">Ian</h4>
                    <h4 class="attorney-lastname">Marcelo</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="claims" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/JulesCasibang.jpg" alt="Jules Casibang">
                <div class="attorney-info">
                    <span class="attorney-role">Legal Assistant</span>
                    <h4 class="attorney-name">Jules</h4>
                    <h4 class="attorney-lastname">Casibang</h4>
                </div>
            </div>

            <!-- MEDICAL DEPARTMENT -->
            <div class="attorney-card" data-dept="medical" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/DexterPiano.jpg" alt="Dexter Piano">
                <div class="attorney-info">
                    <span class="attorney-role">Medical Department Head</span>
                    <h4 class="attorney-name">Dexter</h4>
                    <h4 class="attorney-lastname">Piano</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="medical" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/BernadetteSuravilla.jpg" alt="Bernadette Suravilla">
                <div class="attorney-info">
                    <span class="attorney-role">Medical Team</span>
                    <h4 class="attorney-name">Bernadette</h4>
                    <h4 class="attorney-lastname">Suravilla</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="medical" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/KarloAmbas.jpg" alt="Karlo Ambas">
                <div class="attorney-info">
                    <span class="attorney-role">Medical Team</span>
                    <h4 class="attorney-name">Karlo</h4>
                    <h4 class="attorney-lastname">Ambas</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="medical" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/MaureenGallo.jpg" alt="Maureen Gallo">
                <div class="attorney-info">
                    <span class="attorney-role">Medical Team</span>
                    <h4 class="attorney-name">Maureen</h4>
                    <h4 class="attorney-lastname">Gallo</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="medical" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/RonHinolan.jpg" alt="Ron Hinolan">
                <div class="attorney-info">
                    <span class="attorney-role">Medical Team</span>
                    <h4 class="attorney-name">Ron</h4>
                    <h4 class="attorney-lastname">Hinolan</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="medical" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/FabiReyes.jpg" alt="Fabi Reyes">
                <div class="attorney-info">
                    <span class="attorney-role">Medical Team</span>
                    <h4 class="attorney-name">Fabi</h4>
                    <h4 class="attorney-lastname">Reyes</h4>
                </div>
            </div>

            <!-- Q.M.E. DEPARTMENT -->
            <div class="attorney-card" data-dept="qme" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/AndreaBeso.jpg" alt="Andrea Beso">
                <div class="attorney-info">
                    <span class="attorney-role">Interim QME Supervisor</span>
                    <h4 class="attorney-name">Andrea</h4>
                    <h4 class="attorney-lastname">Beso</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="claims" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/KojiVergara.jpg" alt="Koji Vergara">
                <div class="attorney-info">
                    <span class="attorney-role">Legal Assistant</span>
                    <h4 class="attorney-name">Koji</h4>
                    <h4 class="attorney-lastname">Vergara</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="qme" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/AiraOlvida.jpg" alt="Aira Olvida">
                <div class="attorney-info">
                    <span class="attorney-role">Legal Assistant</span>
                    <h4 class="attorney-name">Aira</h4>
                    <h4 class="attorney-lastname">Olvida</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="qme" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/RobertVillanueva.jpg" alt="Robert Villanueva">
                <div class="attorney-info">
                    <span class="attorney-role">Legal Assistant</span>
                    <h4 class="attorney-name">Robert</h4>
                    <h4 class="attorney-lastname">Villanueva</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="qme" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/ElronBundac.jpg" alt="Elron Bundac">
                <div class="attorney-info">
                    <span class="attorney-role">Legal Assistant</span>
                    <h4 class="attorney-name">Elron</h4>
                    <h4 class="attorney-lastname">Bundac</h4>
                </div>
            </div>

            <!-- MARKETING DEPARTMENT -->
            <div class="attorney-card" data-dept="marketing" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/JamieDoe.jpg" alt="Jamie Doe">
                <div class="attorney-info">
                    <span class="attorney-role">Brand & Partnerships Manager</span>
                    <h4 class="attorney-name">Jamie</h4>
                    <h4 class="attorney-lastname">Doe</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="marketing" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/ValentinaVillamil.jpg" alt="Valentina Villamil">
                <div class="attorney-info">
                    <span class="attorney-role">Social Media Content Creator</span>
                    <h4 class="attorney-name">Valentina</h4>
                    <h4 class="attorney-lastname">Villamil</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="marketing" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/KatrinaMalijan.jpg" alt="Katrina Malijan">
                <div class="attorney-info">
                    <span class="attorney-role">Marketing Admin</span>
                    <h4 class="attorney-name">Katrina</h4>
                    <h4 class="attorney-lastname">Malijan</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="marketing" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/FernandoMandoloni.jpg" alt="Fernando Mandoloni">
                <div class="attorney-info">
                    <span class="attorney-role">Web Design</span>
                    <h4 class="attorney-name">Fernando</h4>
                    <h4 class="attorney-lastname">Mandoloni</h4>
                </div>
            </div>

            <!-- H.R. DEPARTMENT -->
            <div class="attorney-card" data-dept="hr" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/AlanaPederson.jpg" alt="Alana Pederson">
                <div class="attorney-info">
                    <span class="attorney-role">Sr H.R. Partner</span>
                    <h4 class="attorney-name">Alana</h4>
                    <h4 class="attorney-lastname">Pederson</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="hr" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/ChazWilliams.jpg" alt="Chaz Williams">
                <div class="attorney-info">
                    <span class="attorney-role">H.R. Generalist / Office Manager</span>
                    <h4 class="attorney-name">Chaz</h4>
                    <h4 class="attorney-lastname">Williams</h4>
                </div>
            </div>

            <div class="attorney-card" data-dept="hr" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/AbbyCruz.jpg" alt="Abby Cruz">
                <div class="attorney-info">
                    <span class="attorney-role">H.R. Assistant</span>
                    <h4 class="attorney-name">Abby</h4>
                    <h4 class="attorney-lastname">Cruz</h4>
                </div>
            </div>
            <!-- ADMIN DEPARTMENT -->
            <div class="attorney-card" data-dept="admin" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/ShielaJavier.jpg" alt="Shiela Javier">
                <div class="attorney-info">
                    <span class="attorney-role">Receptionist</span>
                    <h4 class="attorney-name">Shiela</h4>
                    <h4 class="attorney-lastname">Javier</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="admin" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/MichelleFunelas.jpg" alt="Michelle Funelas">
                <div class="attorney-info">
                    <span class="attorney-role">Receptionist</span>
                    <h4 class="attorney-name">Michelle</h4>
                    <h4 class="attorney-lastname">Funelas</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="admin" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/HectorRamos.jpg" alt="Hector Ramos">
                <div class="attorney-info">
                    <span class="attorney-role">Settlements</span>
                    <h4 class="attorney-name">Hector</h4>
                    <h4 class="attorney-lastname">Ramos</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="admin" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/VanessaTorres.jpg" alt="Vanessa Torres">
                <div class="attorney-info">
                    <span class="attorney-role">Administrative Assistant</span>
                    <h4 class="attorney-name">Vanessa</h4>
                    <h4 class="attorney-lastname">Torres</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="admin" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/placeholder-silhouette.png" alt="Veronica R">
                <div class="attorney-info">
                    <span class="attorney-role">Administrative Assistant</span>
                    <h4 class="attorney-name">Veronica</h4>
                    <h4 class="attorney-lastname">R.</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="admin" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/placeholder-silhouette.png" alt="Edva Palero">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant</span>
                    <h4 class="attorney-name">Edva</h4>
                    <h4 class="attorney-lastname">Palero</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="admin" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/EmeraHarris.jpg" alt="Emera Harris">
                <div class="attorney-info">
                    <span class="attorney-role">Intern</span>
                    <h4 class="attorney-name">Emera</h4>
                    <h4 class="attorney-lastname">Harris</h4>
                </div>
            </div>

            <!-- OPERATIONS DEPARTMENT -->
            <div class="attorney-card" data-dept="operations" data-office="headquarters" data-bio="Steve Adler is the Chief Operating Officer at the Law Offices of Bob Nehoray, where he oversees firm operations, growth strategy, organizational development, and process innovation across multiple offices throughout California.|Born and raised in San Diego, Steve brings a diverse business and leadership background spanning media, sports partnerships, operations, and organizational management. Prior to entering legal operations, he owned and operated his own business, where he successfully negotiated and managed partnership agreements with organizations including the Major League Baseball Players Association, the National Baseball Hall of Fame and Museum, and numerous universities throughout the country.|Earlier in his career, Steve was a sports talk show host in San Diego with iHeartRadio, where he developed a strong foundation in communication, public engagement, and relationship building.|Steve graduated from University of Redlands, where he was selected by his peers for membership in the Whitehead Leadership Society in recognition of his leadership and community involvement.|Outside of his professional role, Steve remains actively involved in his community. He serves as a commissioner on the Arts &amp; Culture Committee for the City of Goodyear and is a board member of the Litchfield Elementary School District Education Foundation, supporting educational initiatives and community development programs.|Known for his leadership style, operational mindset, and ability to build meaningful professional relationships, Steve continues to focus on organizational growth, innovation, and creating scalable systems that support both clients and teams.">
                <img src="/wp-content/themes/nehoray-law/assets/img/SteveAdler.jpg" alt="Steve Adler">
                <div class="attorney-info">
                    <span class="attorney-role">Chief Operating Officer</span>
                    <h4 class="attorney-name">Steve</h4>
                    <h4 class="attorney-lastname">Adler</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="operations" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/Nikko.jpg" alt="Nikko">
                <div class="attorney-info">
                    <span class="attorney-role">Chief Bark Officer</span>
                    <div class="attorney-social">
                        <a href="https://www.instagram.com/nikkonehoray?igsh=MWIxdXlqYmJybm5kMQ%3D%3D" target="_blank" rel="noopener noreferrer" aria-label="Nikko on Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                            <span>@nikkonehoray</span>
                        </a>
                    </div>
                    <h4 class="attorney-name">Nikko</h4>
                    <h4 class="attorney-lastname">Nehoray</h4>
                </div>
            </div>
            <div class="attorney-card" data-dept="operations" data-office="headquarters">
                <img src="/wp-content/themes/nehoray-law/assets/img/MarkAlcantara.jpg" alt="Mark Alcantara">
                <div class="attorney-info">
                    <span class="attorney-role">Assistant</span>
                    <h4 class="attorney-name">Mark</h4>
                    <h4 class="attorney-lastname">Alcantara</h4>
                </div>
            </div>

        </div>

    </section>

    <!-- OVERLAY DE DETALLE DE MIEMBRO -->
    <div class="member-detail-overlay" id="memberDetailOverlay">
        <div class="member-detail-container">
            <button class="member-detail-close" id="memberDetailClose">&times;</button>
            <div class="member-detail-photo">
                <img id="detailPhoto" src="" alt="">
            </div>
            <div class="member-detail-info">
                <span class="member-detail-role" id="detailRole"></span>
                <h2 class="member-detail-name" id="detailName"></h2>
                <div class="member-detail-divider"></div>
                <p class="member-detail-bio" id="detailBio"></p>
            </div>
        </div>
    </div>

    <section class="referral-section">
        <div class="referral-container">
            
            <div class="referral-header">
                <span class="referral-eyebrow">For Our Colleagues</span>
                <h2 class="referral-title">Attorney Referral Program</h2>
                <p class="referral-description">
                    At the Law Offices of Bob Nehoray, we pride ourselves on the fact that many of our cases are referred by other attorneys. The greatest compliments we receive are referrals from our peers.
                </p>
            </div>

            <div class="referral-grid">
                <div class="referral-item">
                    <h4>New Revenue Streams</h4>
                    <p>Many of our referrals come from attorneys who do not currently offer legal services in many of our practice areas. By referring your client to us, you can ensure they get the legal assistance they need while simultaneously creating a new virtual practice area within your firm.</p>
                </div>

                <div class="referral-item">
                    <h4>Complex Litigation Support</h4>
                    <p>We routinely handle complex matters for firms lacking the time or resources to battle large defendants. Our experienced and aggressive attorneys often obtain results superior to solo practitioners with limited financial resources.</p>
                </div>

                <div class="referral-item">
                    <h4>Out-of-State Partners</h4>
                    <p>We are the ideal partner for out-of-state attorneys with clients needing representation in California. Our multi-disciplinary approach covers all your client's needs in one stop.</p>
                </div>
            </div>

            <div class="referral-cta">
                <p class="referral-quote">"Please rest assured that any fee splitting arrangement will be reflective of the time and effort invested in the matter by all attorneys."</p>
            </div>

        </div>
    </section>
</div>

<?php get_footer(); ?>
