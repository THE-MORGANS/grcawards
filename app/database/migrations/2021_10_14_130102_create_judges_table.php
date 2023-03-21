<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateJudgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('path_to_image')->nullable();
            $table->text('profile')->nullable();
            $table->unsignedBigInteger('award_program_id');
            $table->foreign('award_program_id')->references('id')->on('award_programs')->onDelete('cascade');
            $table->string('fb_link')->nullable();
            $table->string('ig_link')->nullable();
            $table->string('ln_link')->nullable();
            $table->timestamps();
        });

        $judges = [
            [
                'name' => 'Jelili Ade Adebisi', 
                'position'=> 'Fellow - ICAN', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121844/grcfincrimeawards/judges/jelili_adebisi_k37n2o.png',
                'profile' => 'Jelili Adebisi is a Fellow of the Institute of Chartered Accountants of Nigeria (ICAN). Jelili was a partner in Deloitte, West Africa up till May 2019. He was Deloitte West Africa Audit Risk Leader, Chairman West Africa Audit Risk Board and Member of Deloitte Africa Audit Risk Board. He was a partner in Deloitte & Touche Afrique Centrale, Douala Cameroon, later Audit & Assurance partner in the Financial Services Industry and leader, Insurance Audit Business in Deloitte, Nigeria. Jelili had wide experience across industries and also served as the Business Unit leader of Consumer Business, Telecoms and Technology Unit of Deloitte West Africa audit business.. He was involved in audit risk and quality initiatives in Cameroon, Gambia, Ghana, Johannesburg, Nigeria and UK. Jelili was a Board member of Institute of Chartered Accountants of Nigeria (ICAN) Audit, Investigations and Forensic Accounting Faculty and was for several presidential years, member of Professional Practice Monitoring Committee of ICAN.',
                'award_program_id' => 1,
                'ln_link' => 'https://ng.linkedin.com/in/jelili-ade-adebisi-a1a59929'
            ],
            [
                'name' => 'OluFemi Mosaku-Johnson', 
                'position'=> 'Registrar/CEO - ACGPN', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121843/grcfincrimeawards/judges/DR_Olufemi_Mosaku_-_picture_yplqlr.jpg',
                'profile' => 'He is a graduate of Public Administration and has Masters in Personnel Psychology (UNAD, PhD organization leadership. He is a Chartered Secretary and Administrator, a Chartered Management Practitioner, Chartered Personnel Management Practitioner and Chartered Economist, Certified Business Sustainability Practitioner, CIPE Certified Anti-Corruption Practitioner, and IFC Certified Board Evaluator. A Member of the Nigerian Institute of Management (NIM), Chartered Institute of Personnel Management (CIPM) and Nigerian Institute of Training & Development (NITAD). He is a Fellow of the Association of Corporate Governance Professionals of Nigeria and Fellow of the Chartered Institute of Economist of Nigeria. He is a recognised leader in Corporate Governance in Nigeria and implementation of project governance and Strategy for organization with over 29 years of specialist experience in Insurance, Governance, Project Management, Consulting/Professional services, culminating in a successful tenure for ten years in Law Union & Rock Insurance Plc, eight years in Lagos State Public Service Staff Dev. Centre, five years at the Institute of Management (NIM). 
                He subsequently moved to the Institute of Directors\' (IoD), Nigeria where he pioneered and led the Directors’ Development Department with triple A rated directors learning in Nigeria and in the United Kingdom. 
                He is a member of the Board of trustees and secretary of the International Aeronautics College. 
                Secretary to the Board, Medical Ethics and Governance Initiatives, Board Member, Foundation for Value Transformation. Committee Member, Lagos State Post Service Welfare Council. Technical Consultant to Lagos Chamber of Commerce and Industry as well as Examiner at the Chartered Institute of Bankers. 
                He is an IFC Certified Corporate Governance Board Leadership Trainer, South Africa and CMD Accredited Trainer. 
                He is an alumnus of the Lagos Business School, LBS School of Media Communication, HIIT, CMD, IFC, NCEMA, Harvard Associates, FITC, Nepad South Africa, ACGN, South Africa, and is now focused on Board Evaluation, Project Governance and Business Performance using lean methodologies. Also using project governance tools to establish the strategic alignment between all processes, from all business units, at all levels. He is a published author and happily married with children.',
                'award_program_id' => 1,
                'ln_link' => 'https://ng.linkedin.com/in/femi-mosaku-johnson-aa99769b'
            
            ],
            [
                'name' => 'Chii Ndubueze', 
                'position'=> 'Lawyer', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121843/grcfincrimeawards/judges/chii_ndubueze_ph51ib.jpg',
                'profile' => 'Experienced Lawyer with a demonstrated law practice history. Specialized in Cyber-crime, E commerce and Telecommunication Law, practice and research. Strong legal professional graduated from University of Hertfordshire and University of Portsmouth.',
                'award_program_id' => 1,
                'ln_link' => 'https://www.linkedin.com/in/chii-ndubeze-37551a44/'
            ],
            [
                'name' => 'Kenneth Oguzie', 
                'position'=> 'CEO - ACTIV', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121844/grcfincrimeawards/judges/kenneth_oguzie_e32wbr.jpg',
                'profile' => 'Kenneth Oguzie is an International Trade Specialist and the CEO of Africa Canada Trade and Investment Venture (ACTIV), an organization which promotes international Trade and business between Canada and West Africa, both within private sector as well as creating public sector collaborations. He is also the Vice President of the Development of Ocean Technical Capacity with African Nations (DOTCAN)- a Canada-West Africa initiative that promotes Ocean Technology capacity building between Canada and West Africa through the pillars of Education and Training, Ocean Business Development and Entrepreneurship and Maritime Security. Born in Nigeria, Ken considers himself a global citizen having lived in Asia, Europe, Africa and presently North America. A prominent member of the Nigerian community and a recent recipient of the distinguished Nigerian in Nova Scotia award for his contribution to the West African community, he was recently awarded one of topmost inspiring immigrants in the Maritimes. Ken sits on multiple boards and commitees such as the Halifax local immigrant partnership, accessing skilled force committee of the Halifax chambers of commerce, Welcome to Canada Halifax Immigration museum (Pier21) ambassador, ISANS employer advisory council, Diversity, and Inclusion Standing Advisory Committee of the Nova Scotia College of Pharmacists etc.',
                'award_program_id' => 1,
                'ln_link' => 'https://ca.linkedin.com/in/kenneth-oguzie-91b7638'
            
            ],
            [
                'name' => 'Fola Funke Oyinloye (MILR, MCIPM, MNIM)', 
                'position'=> 'Registrar - Landmark University', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121843/grcfincrimeawards/judges/fola_funke_xqbfav.jpg',
                'profile' => 'Mrs Fola is an experienced University Administrator, with proven track record in General Administration, Team Building, Effective Communication, Public Speaking, Policy Writing, Customer Relations, Mentoring, Counseling, Crisis Management and Strategic Analytical Skills. I drive myself to birth change, having no patience with the status quo or mediocrity; and I push others to see and maximize their potentials, to birth change. Every challenge that I encounter on my assignment is an opportunity to demystify impossibility, and develop capacity for bigger assignments. I am objective, optimistic and decisive. A team lover, I believe strongly in the power of many in achieving robust and collaborative successes. I am committed to my given tasks, and strives for result delivery.',
                'award_program_id' => 1,
                'ln_link' => 'https://www.linkedin.com/in/fola-funke-oyinloye-milr-mcipm-mnim-419a2299'
            ],
            [
                'name' => 'Gbubemi Atimomo (SHRM- SCP, SPHRi)', 
                'position'=> 'HR & Business Consultant - Tandem Limited', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121843/grcfincrimeawards/judges/gbubemi_atimomo_uvxxyu.jpg',
                'profile' => 'Gbubemi Atimomo SHRM- SCP, SPHRi, is a passionate enterprise developer and consultant. He has vast experience in consulting and general human resources management. His expertise includes: identifying organizational issues, proposing solutions and working with stakeholders to achieve results.  His area of specialization includes; Consulting, Enterprise Development, Human Resource Strategy, Coaching, Career Advisory, People Development, Organisational Development, Creative Industries, Social Entrepreneurship, and Entrepreneurship.',
                'award_program_id' => 1,
                'ln_link' => 'https://ng.linkedin.com/in/oritsega'
            
            ],
            [
                'name' => 'Olufemi Falola', 
                'position'=> 'Audit Executive & Finance Expert', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121844/grcfincrimeawards/judges/femi_falola_zzxsvv.jpg',
                'profile' => 'Olufemi Falola is a Chartered Accountant, with over 24 years post qualification experience, most of which was spent as a career in the foremost Firm of Chartered Accountants, Akintola Williams Deloitte where he became a Partner in 2003 and moved on in January, 2009.
                Olufemi holds a Higher National Diploma in Accountancy (Upper Credit) from the Federal Polytechnic, Ilaro (1991). He is a Fellow of the Institute of Chartered Accountants of Nigeria (ICAN) and an Associate of Chartered Institute of Taxation of Nigeria (CITN). Olufemi, who is an Associate member of the Association of Certified Fraud Examiners (ACFE) is also a member of the Institute of Internal Auditors (IIA). He holds the prestigious Master of Business Administration (MBA) Degree from Manchester Business School, University of Manchester, UK. A Certified SAP R3 FI/CO Consultant from SAP Partner Academy, Johannesburg, South Africa, Olufemi has also participated in a number of top leadership development programmes, including the customized Pathways Leadership Programme delivered by Cranfield School of Management in conjunction with Lagos Business School (LBS).
                Olufemi joined Akintola Williams Deloitte in 1993, where he possessed 16 years of Auditing and Accountancy business experience and exposure, which included 6 years as a Partner. Through hard work, dedication, professional competence and integrity, amongst other qualities, he rose to the position of a Partner effective 1 June, 2003 after 10 years of employment in the professional service firm and at the age of 36, a record achievement by the local Deloitte firm’s standard. Femi started in Deloitte as Audit Trainee (fresh graduate) and became Senior Manager within a record 7 years after qualifying as a Chartered Accountant within 2 years of writing the qualifying examinations, while working with Deloitte. He participated dynamically in developing Deloitte to its enviable leading position in the league of professional service firms not only in Nigeria but in West and Central Africa. 
                Olufemi has extensive auditing experience in the following industries: Banking and Insurance, Manufacturing/Consumer business, Oil and Gas and Service Providers including Telecommunication. His other specialist experiences include over 4 years experience as Engagement Partner in charge of outsourced Internal Audit functions. 
                Also while in Deloitte, Olufemi was the Partner saddled with the oversight responsibility for the Information Technology function of the entire Deloitte West and Central Africa for 5 years (2003 – 2008). He also doubled as the Firm’s Chief Finance Officer (CFO) for 17 months from January 2007 till May 2008.
                Upon leaving Deloitte as a Partner in January 2009, Femi co-established Rehoboth Professional Services before making a foray into the industry to broaden his experience and expand his horizon by joining Bemil Nigeria Limited as the Chief Operating Officer (COO), a position he occupied from July 2009 till October, 2011. 
                In between his regular duties at Bemil, Olufemi consults for the World Bank in the area of Financial Management of World Bank projects.
                In October, 2011, Femi joined Etisalat Nigeria as the Director, Internal Audit, a newly created position within the Company at that time. This role afforded Femi the opportunity to build the internal audit function in a rapidly growing Company from the ground up while initially focusing on developing methodology, creating an audit universe, conducting a risk assessment and developing and executing the annual risk-based internal audit plan. 
                Olufemi is a perfectionist; a thorough and meticulous person. He is known to be very passionate about his work, emotional, reserved but dogged. 
                In the course of business assignments and quest for knowledge, Olufemi has had the privilege of travelling extensively for training programs, seminars, business meetings and on vacation to several countries in Africa, Europe and America.',
                'award_program_id' => 1,
                'ln_link' => 'https://www.linkedin.com/in/olufemi-falola-35626333/'
            
            ],
            [
                'name' => 'Bola Segun-Peter', 
                'position'=> 'Associate Member - NIM & RIMAN', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121844/grcfincrimeawards/judges/bola_segun_lmcik6.jpg',
                'profile' => 'Bola Segun-Peter holds Bachelors and Masters Degrees in Economics and an MBA in Management from the Lagos Business School. 
                She has over 2 decades of banking experience with extensive hands-on experience in Credit Risk Management cutting across top Nigerian banks and up till January 2019, she was Assistant General Manager/Head of Credit Administration in Ecobank Nigeria Ltd. Bola has passion for change management and interest in personal finance as she strongly believes that being financially independent is key to financial freedom. 
                Bola is an Associate Member of the Nigerian Institute of Management (Chartered) and Risk Managers’ Association of Nigeria (RIMAN). She is currently involved in School Safety implementation project in schools in Lagos State.
                
                She presently runs her own business which includes Consulting, Micro lending & advisory services, Insurance Agency, Perfumery and trading in & distribution of FMCGs.  She is an avid lover of sports particularly Football, Tennis & F1. 
                
                Bola is happily married with children.',
                'award_program_id' => 1,
                'ln_link' => ''
            
            ],
            [ 
                'name' => 'Adedayo Adeyemi', 
                'position'=> 'Barrister', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121844/grcfincrimeawards/judges/adedayo_adeyemi_yjbnxy.jpg',
                'profile' => 'Bar. Adedayo Adeyemi has over 30 years post graduate experience. He holds a bachelor degree in Social Sciences from University of Ife now Obafemi Awolowo University, Ile-Ife and a Law degree from the University of Lagos. 

                He crossed to the banking sector in 1991 from the broadcasting sector. He served in the General Administration department of the Fountain Trust Bank Plc, as well as the Human Resources department and Credit Administration Department of the Bank. 
                
                Bar. Adeyemi’s legal expertise enhanced his career focus as a disciplined control person devoid of bias in analyzing risks in credit related issues. This has been made possible with the assistance of relevant courses to position him as a risk manager. His short stay in the Legal Dept of Fountain Trust Bank coupled with a wide range of credit background facilitated his continued stay in the Debt Recovery and Classified Assets Management Group of the Bank as a Manager till the eve of banking consolidation in December, 2005. 
                
                With the absorption of Fountain Trust Bank into the Spring Bank Plc coupled with his experience as a remedial management manager, Bar Adeyemi was charged with the responsibility of heading the External Recoveries Unit of the Remedial Asset Management Group III of the Bank till September, 2008. In April, 2008, He was promoted to the level of a Senior Manager where he supervised the Remedial Assets Management Group of Spring Bank Plc till it metamorphosized into Enterprise Bank Limited. He left Enterprise Bank on 14th February, 2012. 
                
                Bar. Adeyemi has been in full legal practice till date.  
                ',
                'award_program_id' => 1,
                'ln_link' => 'https://www.linkedin.com/in/dayo-adeyemi-b6271830/'
            
            ],

            [
                'name' => 'Jelili Ade Adebisi', 
                'position'=> 'Fellow - ICAN', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121844/grcfincrimeawards/judges/jelili_adebisi_k37n2o.png',
                'profile' => 'Jelili Adebisi is a Fellow of the Institute of Chartered Accountants of Nigeria (ICAN). Jelili was a partner in Deloitte, West Africa up till May 2019. He was Deloitte West Africa Audit Risk Leader, Chairman West Africa Audit Risk Board and Member of Deloitte Africa Audit Risk Board. He was a partner in Deloitte & Touche Afrique Centrale, Douala Cameroon, later Audit & Assurance partner in the Financial Services Industry and leader, Insurance Audit Business in Deloitte, Nigeria. Jelili had wide experience across industries and also served as the Business Unit leader of Consumer Business, Telecoms and Technology Unit of Deloitte West Africa audit business.. He was involved in audit risk and quality initiatives in Cameroon, Gambia, Ghana, Johannesburg, Nigeria and UK. Jelili was a Board member of Institute of Chartered Accountants of Nigeria (ICAN) Audit, Investigations and Forensic Accounting Faculty and was for several presidential years, member of Professional Practice Monitoring Committee of ICAN.',
                'award_program_id' => 2,
                'ln_link' => 'https://ng.linkedin.com/in/jelili-ade-adebisi-a1a59929'
            ],
            [
                'name' => 'Olufemi Mosaku-Johnson', 
                'position'=> 'Registrar/CEO - ACGPN', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664351176/grcfincrimeawards/judges/mosaku_johnson_mogkht.jpg',
                'profile' => 'He is a graduate of Public Administration and has Masters in Personnel Psychology (UNAD, PhD organization leadership. He is a Chartered Secretary and Administrator, a Chartered Management Practitioner, Chartered Personnel Management Practitioner and Chartered Economist, Certified Business Sustainability Practitioner, CIPE Certified Anti-Corruption Practitioner, and IFC Certified Board Evaluator. A Member of the Nigerian Institute of Management (NIM), Chartered Institute of Personnel Management (CIPM) and Nigerian Institute of Training & Development (NITAD). He is a Fellow of the Association of Corporate Governance Professionals of Nigeria and Fellow of the Chartered Institute of Economist of Nigeria. He is a recognised leader in Corporate Governance in Nigeria and implementation of project governance and Strategy for organization with over 29 years of specialist experience in Insurance, Governance, Project Management, Consulting/Professional services, culminating in a successful tenure for ten years in Law Union & Rock Insurance Plc, eight years in Lagos State Public Service Staff Dev. Centre, five years at the Institute of Management (NIM). 
                He subsequently moved to the Institute of Directors\' (IoD), Nigeria where he pioneered and led the Directors’ Development Department with triple A rated directors learning in Nigeria and in the United Kingdom. 
                He is a member of the Board of trustees and secretary of the International Aeronautics College. 
                Secretary to the Board, Medical Ethics and Governance Initiatives, Board Member, Foundation for Value Transformation. Committee Member, Lagos State Post Service Welfare Council. Technical Consultant to Lagos Chamber of Commerce and Industry as well as Examiner at the Chartered Institute of Bankers. 
                He is an IFC Certified Corporate Governance Board Leadership Trainer, South Africa and CMD Accredited Trainer. 
                He is an alumnus of the Lagos Business School, LBS School of Media Communication, HIIT, CMD, IFC, NCEMA, Harvard Associates, FITC, Nepad South Africa, ACGN, South Africa, and is now focused on Board Evaluation, Project Governance and Business Performance using lean methodologies. Also using project governance tools to establish the strategic alignment between all processes, from all business units, at all levels. He is a published author and happily married with children.',
                'award_program_id' => 2,
                'ln_link' => 'https://ng.linkedin.com/in/femi-mosaku-johnson-aa99769b'
            
            ],
            [
                'name' => 'Temitope Yusuff', 
                'position'=> 'Business and Finance Leader', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121845/grcfincrimeawards/judges/temitope_yusuff_dnhwzg.jpg',
                'profile' => 'Temitope Yusuff is a seasoned Business Leader and Finance professional, with over eighteen years of financial experience, with exposure to both local and international organizations. Her varied experience in providing core business transformation, strategy, auditing, risk management and corporate governance services provided me with a well-rounded perspective necessary to meet the needs business and financial needs of organizations. 

Currently, She serve as the Director of Internal Audit and Risk Management of one of the largest telecommunications infrastructure providers globally and her work involves providing strategic leadership and direction in the planning, execution, and management of risk management and internal audit activities across IHS Africa (Nigeria, Cameroon, Cote d’Ivoire, Zambia, Rwanda, and South Africa). She leads the organization across a variety of global operational standards, which enables them to make efficient sound financial decisions, in line with global practices.

I am a fellow of the Institute of Chartered Accountants(ICAN) and the Chartered Institute of Taxation of Nigeria (CITN), an Alumna of IESE Spain, with an MBA from the Lagos business school.

As a consummate Business professional, she possess a drive to create and implement robust solutions that bring about sustainable impact, transforming the businesses of professionals and business owners.
',
                'award_program_id' => 2,
                'ln_link' => 'https://www.linkedin.com/in/temitope-yusuff-86b41b57/'
            ],
            [
                'name' => 'Olumide Ajayi', 
                'position'=> 'Senior KYC Consultant', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121845/grcfincrimeawards/judges/olu_ajayi_gpwlo3.jpg',
                'profile' => 'Olumide is a conscientious professional, well-rounded, results-oriented, thorough with an excellent track record extensive experience in Regulatory Compliance, AML/KYC, Project Management and Business Analysis worked in the financial and non-bank financial sector. 

He has demonstrable quality and productivity expertise with proven skills in effective leadership, coaching, and mentoring. He has participated in the implementation of Banking Application projects, including new products, services, and upgrades to banking application platforms. He is confident that my wealth of experience built on my academic training, knowledge and understanding of the systems, processes and conduct risk has given me the skills required to work effectively in the Financial Service space.',
                'award_program_id' => 2,
                'ln_link' => 'https://www.linkedin.com/in/olu-ajayi-12b81965/'
            
            ],
            [
                'name' => 'Fola Funke Oyinloye (MILR, MCIPM, MNIM)', 
                'position'=> 'Registrar - Landmark University', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121843/grcfincrimeawards/judges/fola_funke_xqbfav.jpg',
                'profile' => 'Mrs Fola is an experienced University Administrator, with proven track record in General Administration, Team Building, Effective Communication, Public Speaking, Policy Writing, Customer Relations, Mentoring, Counseling, Crisis Management and Strategic Analytical Skills. I drive myself to birth change, having no patience with the status quo or mediocrity; and I push others to see and maximize their potentials, to birth change. Every challenge that I encounter on my assignment is an opportunity to demystify impossibility, and develop capacity for bigger assignments. I am objective, optimistic and decisive. A team lover, I believe strongly in the power of many in achieving robust and collaborative successes. I am committed to my given tasks, and strives for result delivery.',
                'award_program_id' => 2,
                'ln_link' => 'https://www.linkedin.com/in/fola-funke-oyinloye-milr-mcipm-mnim-419a2299'
            ],
            [
                'name' => 'Emmanuel Michael (SPHRi)', 
                'position'=> 'Founder - HRwithEM', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121844/grcfincrimeawards/judges/en_micheal_ugyrwz.jpg',
                'profile' => 'Emmanuel Michael, a Certified Leadership and Career Success Coach, is a seasoned and highly sought-after multiple award winning strategic business leader with over 20 years of management experience spanning various industries such as multidisciplinary engineering, information technology, hospitality, and financial services, of which over 17 years have been in human resources management practice. Between March and August 2017, he held forth as the Interim CEO at Letshego MFB, a national microfinance bank in Nigeria. He is currently the Head of People & Culture at Letshego Nigeria.

Emmanuel is a globally certified HR practitioner (SPHRi®, HRPL, MCIPM, MITD), subject matter expert with the HR Certification Institute (USA), and a Microfinance Certified Banker (MCIB). He serves as a career and business mentor on various mentoring platforms which include, The Cherie Blair Foundation for Women, The Chartered Institute of Bankers of Nigeria (CIBN), FATE Foundation, and GROW by Hacking HR, amongst a host of others.

His contribution to the global HR community has resulted in several recognitions and awards both locally and internationally, chief among them are the 100 Most Influential Global HR Leaders (2018), 101 Global HR Heroes (2019), and 501 Most Fabulous Global HR Leaders (2020) awards by the World HRD Congress. He was recently recognized as a Top-rated Influencer on The Most Inclusive HR Influencer List by @socialmicole, Top 8 HR Thought Leader in Africa, Top 50 Personalities on LinkedIn in Nigeria, Top 3 Best Revenue Supporting HR, and Top 50 Career Influencer in Africa.

In addition to being a regular contributor on current HR issues and trends on social media, Emmanuel enjoys public speaking at both local and international fora, blogs at www.enmichael.ng, hosts #HRwithEM on his social media channels weekly on Saturdays at 4 pm WAT with a focus on leaderahip, career development, and employee experience practices. 
',
                'award_program_id' => 2,
                'ln_link' => 'https://www.linkedin.com/in/enmichael/'
            ],
            [
                'name' => 'Gbubemi Atimomo (SHRM- SCP, SPHRi)', 
                'position'=> 'HR & Business Consultant - Tandem Limited', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121843/grcfincrimeawards/judges/gbubemi_atimomo_uvxxyu.jpg',
                'profile' => 'Gbubemi Atimomo SHRM- SCP, SPHRi, is a passionate enterprise developer and consultant. He has vast experience in consulting and general human resources management. His expertise includes: identifying organizational issues, proposing solutions and working with stakeholders to achieve results.  His area of specialization includes; Consulting, Enterprise Development, Human Resource Strategy, Coaching, Career Advisory, People Development, Organisational Development, Creative Industries, Social Entrepreneurship, and Entrepreneurship.',
                'award_program_id' => 2,
                'ln_link' => 'https://ng.linkedin.com/in/oritsega'
            
            ],
            [
                'name' => 'Bola Segun-Peter', 
                'position'=> 'Associate Member - NIM & RIMAN', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121844/grcfincrimeawards/judges/bola_segun_lmcik6.jpg',
                'profile' => 'Bola Segun-Peter holds Bachelors and Masters Degrees in Economics and an MBA in Management from the Lagos Business School. 
                She has over 2 decades of banking experience with extensive hands-on experience in Credit Risk Management cutting across top Nigerian banks and up till January 2019, she was Assistant General Manager/Head of Credit Administration in Ecobank Nigeria Ltd. Bola has passion for change management and interest in personal finance as she strongly believes that being financially independent is key to financial freedom. 
                Bola is an Associate Member of the Nigerian Institute of Management (Chartered) and Risk Managers’ Association of Nigeria (RIMAN). She is currently involved in School Safety implementation project in schools in Lagos State.
                
                She presently runs her own business which includes Consulting, Micro lending & advisory services, Insurance Agency, Perfumery and trading in & distribution of FMCGs.  She is an avid lover of sports particularly Football, Tennis & F1. 
                
                Bola is happily married with children.',
                'award_program_id' => 2,
                'ln_link' => ''
            
            ],
            [ 
                'name' => 'Adedayo Adeyemi', 
                'position'=> 'Barrister', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121844/grcfincrimeawards/judges/adedayo_adeyemi_yjbnxy.jpg',
                'profile' => 'Bar. Adedayo Adeyemi has over 30 years post graduate experience. He holds a bachelor degree in Social Sciences from University of Ife now Obafemi Awolowo University, Ile-Ife and a Law degree from the University of Lagos. 

                He crossed to the banking sector in 1991 from the broadcasting sector. He served in the General Administration department of the Fountain Trust Bank Plc, as well as the Human Resources department and Credit Administration Department of the Bank. 
                
                Bar. Adeyemi’s legal expertise enhanced his career focus as a disciplined control person devoid of bias in analyzing risks in credit related issues. This has been made possible with the assistance of relevant courses to position him as a risk manager. His short stay in the Legal Dept of Fountain Trust Bank coupled with a wide range of credit background facilitated his continued stay in the Debt Recovery and Classified Assets Management Group of the Bank as a Manager till the eve of banking consolidation in December, 2005. 
                
                With the absorption of Fountain Trust Bank into the Spring Bank Plc coupled with his experience as a remedial management manager, Bar Adeyemi was charged with the responsibility of heading the External Recoveries Unit of the Remedial Asset Management Group III of the Bank till September, 2008. In April, 2008, He was promoted to the level of a Senior Manager where he supervised the Remedial Assets Management Group of Spring Bank Plc till it metamorphosized into Enterprise Bank Limited. He left Enterprise Bank on 14th February, 2012. 
                
                Bar. Adeyemi has been in full legal practice till date.  
                ',
                'award_program_id' => 2,
                'ln_link' => 'https://www.linkedin.com/in/dayo-adeyemi-b6271830/'
            
            ],
            [ 
                'name' => 'Esosa Balogun (BSc, FCA, CCSA, CRMA, CIA, MBA)', 
                'position'=> 'General Manager, Risk Mgt. at MTN Nigeria', 
                'path_to_image'=>'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664121846/grcfincrimeawards/judges/esosa_balogun_rblaiu.jpg',
                'profile' => 'Esosa is a seasoned professional with extensive experience in the areas of Enterprise Risk Management, Internal Audit, Internal Control, Compliance and Corporate Governance. She is currently the General Manager, Risk Management in the Risk and Compliance Division of MTN Nigeria Communications Plc. Prior to joining MTN; she was the Head, Risk and Compliance for the UAC Group and Senior Manager, Risk Consulting at KPMG Nigeria. She possesses an in-depth understanding of the Nigerian business environment having led engagements across various industries including manufacturing, oil and gas, telecommunications and ﬁnancial services industries. She holds a Master in Business Administration (MBA) from Edinburgh Business School, United Kingdom and a Bachelor of Science in Accounting from the University of Benin. She is a Fellow of the Institute of Chartered Accountants of Nigeria (ICAN), a member of The Institute of Internal Auditors (IIA) as well as the Institute of Directors (IoD). She has obtained certifications in Risk Management Assurance (CRMA), Internal Audit (CIA), and in Control Self- Assessment (CCSA) from the IIA Global. Esosa was Non-Executive Director and Chairperson of Portland Paints & Products Nigeria Plc (2019 -2021). She is a lover of God and a stoic supporter of leadership and growth for women.',
                'award_program_id' => 2,
                'ln_link' => 'https://www.linkedin.com/in/esosa-balogun'
            
            ],
        ];


        foreach ($judges as $judge){
            DB::table('judges')->insert($judge);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judges');
    }
}
