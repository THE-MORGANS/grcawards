<?php

// Single source of truth for the judges' post-evaluation feedback survey.
// The form view, submit-time validation, and admin detail view all read from this
// file, so question wording / options / required-ness only ever need to change here.

$poorExcellent = [1 => 'Very Poor', 2 => 'Poor', 3 => 'Satisfactory', 4 => 'Good', 5 => 'Excellent'];
$agreeScale = [1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Neutral', 4 => 'Agree', 5 => 'Strongly Agree'];

return [

    'sections' => [

        [
            'title' => 'Section 1: About Your Judging Experience',
            'questions' => [
                1 => [
                    'text' => 'Which region were you assigned to review?',
                    'type' => 'multiple_choice',
                    'options' => ['Africa', 'Europe', 'Both / Cross-regional assignment', 'Other'],
                    'required' => true,
                ],
                2 => [
                    'text' => 'Approximately how many award categories did you review?',
                    'type' => 'multiple_choice',
                    'options' => ['1–3', '4–6', '7–10', 'More than 10'],
                    'required' => true,
                ],
                3 => [
                    'text' => 'Is this your first year serving as a judge for the GRC & Financial Crime Prevention Awards?',
                    'type' => 'multiple_choice',
                    'options' => ['Yes', 'No'],
                    'required' => true,
                ],
            ],
        ],

        [
            'title' => 'Section 2: Judges Week Orientation',
            'intro' => 'Please rate the following:',
            'questions' => [
                4 => ['text' => 'Quality of the Judges Week opening briefing', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                5 => ['text' => 'Clarity of the judging process explained during the orientation', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                6 => ['text' => 'Clarity of your role and responsibilities as a judge', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                7 => ['text' => 'Clarity of the Conflict of Interest, Independence and Confidentiality requirements', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                8 => ['text' => 'Clarity of the regional allocation model', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                9 => ['text' => 'Clarity of the scoring methodology and weighting', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                10 => ['text' => 'Overall usefulness of the Judges Week presentation and supporting documents', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
            ],
        ],

        [
            'title' => 'Section 3: Judging Portal',
            'intro' => 'Please rate the following:',
            'questions' => [
                11 => ['text' => 'Ease of accessing the judging portal', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                12 => ['text' => 'Ease of navigating the portal', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                13 => ['text' => 'Clarity of nominee information presented', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                14 => ['text' => 'Ease of accessing evidence and supporting links', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                15 => ['text' => 'Ease of entering scores and comments', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                16 => ['text' => 'Reliability and general performance of the judging portal', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                17 => ['text' => 'Overall user experience of the judging platform', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
            ],
        ],

        [
            'title' => 'Section 4: Quality of Evidence',
            'questions' => [
                18 => ['text' => 'How would you rate the overall quality of evidence provided for nominees?', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                19 => [
                    'text' => 'Was there generally sufficient evidence available to support fair evaluation?',
                    'type' => 'multiple_choice',
                    'options' => ['Yes, for almost all nominees', 'Yes, for most nominees', 'Evidence was mixed', 'Evidence was insufficient for several nominees', 'Evidence was generally insufficient'],
                    'required' => false,
                ],
                20 => ['text' => 'How useful were the primary sources provided, such as official websites, annual reports and organisational publications?', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => false],
                21 => ['text' => 'How useful were secondary and independent sources, including regulatory information and credible media sources?', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => false],
                22 => [
                    'text' => 'Did you undertake your own independent research in addition to reviewing the information provided?',
                    'type' => 'multiple_choice',
                    'options' => ['Yes, extensively', 'Yes, for some nominees', 'Only where necessary', 'No'],
                    'required' => false,
                ],
                23 => [
                    'text' => 'Were there any nominees where you felt the available evidence was insufficient to support an appropriate score?',
                    'type' => 'multiple_choice',
                    'options' => ['Yes', 'No'],
                    'required' => false,
                ],
                24 => [
                    'text' => 'If yes, please briefly explain the type of evidence that was missing.',
                    'type' => 'long_answer',
                    'required' => false,
                    'show_if' => [23 => 'Yes'],
                ],
            ],
        ],

        [
            'title' => 'Section 5: Scoring and Assessment Criteria',
            'questions' => [
                25 => ['text' => 'How clear were the category-specific judging criteria?', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                26 => ['text' => 'How appropriate was the 1–10 scoring scale?', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                27 => [
                    'text' => "How appropriate do you consider the overall weighting of: Judges' Assessment – 75%, Public Vote – 25%?",
                    'type' => 'multiple_choice',
                    'options' => ['Very appropriate', 'Appropriate', 'Neutral', 'Somewhat inappropriate', 'Not appropriate'],
                    'required' => true,
                ],
                28 => [
                    'text' => 'Did the scoring criteria enable you to distinguish effectively between strong and exceptional nominees?',
                    'type' => 'multiple_choice',
                    'options' => ['Yes, very effectively', 'Yes, reasonably effectively', 'To some extent', 'No'],
                    'required' => true,
                ],
                29 => [
                    'text' => 'Were there any criteria that you found unclear, repetitive or difficult to assess?',
                    'type' => 'long_answer',
                    'required' => true,
                ],
            ],
        ],

        [
            'title' => 'Section 6: Fairness, Independence and Integrity',
            'intro' => 'Please indicate your level of agreement:',
            'questions' => [
                30 => ['text' => 'I was able to conduct my assessment independently.', 'type' => 'scale', 'labels' => $agreeScale, 'required' => true],
                31 => ['text' => 'I understood when and how to declare a Conflict of Interest.', 'type' => 'scale', 'labels' => $agreeScale, 'required' => true],
                32 => ['text' => 'The regional allocation approach supported fair and contextually informed judging.', 'type' => 'scale', 'labels' => $agreeScale, 'required' => true],
                33 => ["text" => "The process protected the confidentiality of judges' individual assessments.", 'type' => 'scale', 'labels' => $agreeScale, 'required' => true],
                34 => ['text' => 'I did not feel pressured or influenced in how I scored nominees.', 'type' => 'scale', 'labels' => $agreeScale, 'required' => true],
                35 => ['text' => 'The judging process was sufficiently transparent.', 'type' => 'scale', 'labels' => $agreeScale, 'required' => true],
                36 => ['text' => 'The judging process maintained an appropriate balance between transparency and confidentiality.', 'type' => 'scale', 'labels' => $agreeScale, 'required' => true],
                37 => ['text' => 'I have confidence in the overall integrity of the 2026 judging process.', 'type' => 'scale', 'labels' => $agreeScale, 'required' => true],
            ],
        ],

        [
            'title' => 'Section 7: Regional Allocation',
            'questions' => [
                38 => ['text' => 'How effective was the approach of assigning Africa-based judges primarily to Africa entries and Europe-based judges primarily to Europe entries?', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                39 => [
                    'text' => 'Did your regional knowledge help you assess nominees more effectively?',
                    'type' => 'multiple_choice',
                    'options' => ['Yes, significantly', 'Yes, to some extent', 'No significant difference', 'No'],
                    'required' => true,
                ],
                40 => [
                    'text' => 'Would you recommend retaining the regional allocation model in future editions?',
                    'type' => 'multiple_choice',
                    'options' => ['Yes', 'Yes, with some improvements', 'Unsure', 'No'],
                    'required' => true,
                ],
                41 => [
                    'text' => 'If improvements are needed, please explain.',
                    'type' => 'long_answer',
                    'required' => false,
                ],
            ],
        ],

        [
            'title' => 'Section 8: Secretariat and Support',
            'intro' => 'Please rate the following:',
            'questions' => [
                42 => ['text' => 'Responsiveness of the Awards Secretariat', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                43 => ['text' => 'Technical support during the evaluation process', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                44 => ['text' => 'Clarity of email and WhatsApp communications', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                45 => ['text' => 'Availability of support during Judges Week', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                46 => ['text' => 'Effectiveness of the Chair of Judges in providing direction and guidance', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
                47 => ['text' => 'Overall coordination of the judging process', 'type' => 'scale', 'labels' => $poorExcellent, 'required' => true],
            ],
        ],

        [
            'title' => 'Section 9: Time and Workload',
            'questions' => [
                48 => [
                    'text' => 'Was the time provided to complete your evaluation sufficient?',
                    'type' => 'multiple_choice',
                    'options' => ['More than sufficient', 'Sufficient', 'Just sufficient', 'Insufficient', 'Very insufficient'],
                    'required' => true,
                ],
                49 => [
                    'text' => 'How would you describe the overall judging workload?',
                    'type' => 'multiple_choice',
                    'options' => ['Very manageable', 'Manageable', 'Reasonable but demanding', 'Heavy', 'Excessive'],
                    'required' => true,
                ],
                50 => [
                    'text' => 'Approximately how much total time did you spend completing your evaluation?',
                    'type' => 'multiple_choice',
                    'options' => ['Less than 2 hours', '2–4 hours', '4–6 hours', '6–10 hours', 'More than 10 hours'],
                    'required' => true,
                ],
                51 => [
                    'text' => 'What would be your preferred judging period for future editions?',
                    'type' => 'multiple_choice',
                    'options' => ['5 days', '7 days', '10 days', '14 days', 'Other'],
                    'required' => true,
                ],
            ],
        ],

        [
            'title' => 'Section 10: Overall Experience',
            'questions' => [
                52 => [
                    'text' => 'Overall, how would you rate your experience as a judge for the 2026 Awards?',
                    'type' => 'scale',
                    'labels' => [1 => 'Very Poor', 2 => 'Poor', 3 => 'Satisfactory', 4 => 'Very Good', 5 => 'Excellent'],
                    'required' => true,
                ],
                53 => [
                    'text' => 'How likely are you to serve again as a judge in a future edition?',
                    'type' => 'scale',
                    'labels' => array_merge([0 => 'Not at all likely'], array_fill_keys(range(1, 9), null), [10 => 'Extremely likely']),
                    'required' => true,
                ],
                54 => [
                    'text' => 'Would you recommend participation on the Panel of Judges to another suitably qualified professional?',
                    'type' => 'multiple_choice',
                    'options' => ['Definitely', 'Probably', 'Unsure', 'Probably not', 'Definitely not'],
                    'required' => true,
                ],
                55 => ["text" => "In your opinion, what worked particularly well during this year's judging process?", 'type' => 'long_answer', 'required' => false],
                56 => ['text' => 'What is the single most important improvement you would recommend for the next judging cycle?', 'type' => 'long_answer', 'required' => false],
                57 => ['text' => 'Were there any aspects of the process that you believe could potentially affect fairness, independence or credibility and should be reviewed?', 'type' => 'long_answer', 'required' => false],
                58 => ['text' => 'Are there any additional award categories, sectors or areas of professional practice that you believe should be considered in future editions?', 'type' => 'long_answer', 'required' => false],
                59 => ['text' => 'Please share any additional comments, recommendations or observations.', 'type' => 'long_answer', 'required' => false],
            ],
        ],

        [
            'title' => 'Section 11: Testimonial / Media Consent',
            'questions' => [
                60 => [
                    'text' => 'In one or two sentences, how would you describe your experience serving on the 2026 Panel of Judges?',
                    'type' => 'long_answer',
                    'required' => false,
                    'optional_label' => true,
                ],
                61 => [
                    'text' => 'May the GRC & Financial Crime Prevention Awards use your response to Question 60 as a testimonial in future communications?',
                    'type' => 'multiple_choice',
                    'options' => ['Yes, with my name and professional title', 'Yes, anonymously', 'No'],
                    'required' => false,
                ],
            ],
        ],

    ],

];
