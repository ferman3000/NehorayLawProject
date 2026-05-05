/* 
   Chat Configuration 
   Defines the conversation flow, questions, and logic.
   Edit this file to change texts or add new steps without touching the engine.
*/

window.chatConfig = {
    // Starting Point
    start: {
        message: "Welcome to the Law Offices of Bob Nehoray. What kind of matter can we assist you with today?",
        type: "buttons", // User must click a button
        key: "case_type",
        options: [
            { label: "Workers Comp / Employment Law", next: "wc_name" },
            { label: "Personal Injury", next: "pi_name" }
        ]
    },

    // --- WORKERS COMP ROUTE ---
    wc_name: {
        message: "This will be quick – Can I please get your full name?",
        type: "text",
        key: "full_name",
        validation: "name", // No numbers/symbols
        next: "wc_phone"
    },
    wc_phone: {
        message: "Just in case we get disconnected, can we have your phone number?",
        type: "text",
        key: "phone",
        validation: "phone", // Custom validation logic tag
        next: "wc_email"
    },
    wc_email: {
        message: "And an email address?",
        type: "text",
        key: "email",
        validation: "email",
        next: "wc_employer"
    },
    wc_employer: {
        message: "What is the name of the employer?",
        type: "text",
        key: "employer_name",
        validation: "employer", // No special chars
        next: "wc_emp_size"
    },
    wc_emp_size: {
        message: "How large is your employer?",
        type: "buttons",
        key: "employer_size",
        options: [
            { label: "1-10 employees", next: "wc_city" },
            { label: "11-50 employees", next: "wc_city" },
            { label: "50+ employees", next: "wc_city" }
        ]
    },
    wc_city: {
        message: "What city are you located?",
        type: "text",
        key: "location",
        validation: "city", // No numbers/symbols
        next: "wc_description"
    },
    wc_description: {
        message: "Can you briefly describe your current situation?",
        type: "textarea",
        key: "description",
        next: "wc_permission"
    },
    wc_permission: {
        message: "May we have someone from our Law Firm reach out to you to discuss your case further? This may include phone calls, text messages, or emails. Standard message and data rates may apply.",
        type: "buttons",
        key: "permission_contact",
        options: [
            { label: "Yes, please contact me", next: "end_success" },
            { label: "No, thank you", next: "end_exit" }
        ]
    },

    // --- PERSONAL INJURY ROUTE ---
    pi_name: {
        message: "This will be quick – Can I please get your full name?",
        type: "text",
        key: "full_name",
        validation: "name", // No numbers/symbols
        next: "pi_phone"
    },
    pi_phone: {
        message: "Just in case we get disconnected, can we have your phone number?",
        type: "text",
        key: "phone",
        validation: "phone",
        next: "pi_email"
    },
    pi_email: {
        message: "And an email address?",
        type: "text",
        key: "email",
        validation: "email",
        next: "pi_description"
    },
    pi_description: {
        message: "Can you briefly describe your current situation?",
        type: "textarea",
        key: "description",
        next: "pi_location"
    },
    pi_location: {
        message: "What city and state did this happen?",
        type: "text",
        key: "incident_location",
        validation: "city",
        next: "pi_injuries_check"
    },
    pi_injuries_check: {
        message: "Did you suffer any injuries in the accident?",
        type: "buttons",
        key: "has_injuries",
        options: [
            { label: "Yes, I was injured", next: "pi_injuries_list_self" },
            { label: "No (someone else was injured)", next: "pi_injuries_list_other" }
        ]
    },
    pi_injuries_list_self: {
        message: "Please check all that apply:",
        type: "multiselect", // Custom type for checkboxes
        key: "injury_details",
        options: [
            "Head & brain", "Back and neck", "Chest",
            "Arm & leg", "Broken bones", "Soft tissue",
            "Scrapes and cuts", "Other"
        ],
        next: "pi_permission"
    },
    pi_injuries_list_other: {
        message: "Please check all that apply for the injured person:",
        type: "multiselect",
        key: "injury_details_other",
        options: [
            "Head & brain", "Back and neck", "Chest",
            "Arm & leg", "Broken bones", "Soft tissue",
            "Scrapes and cuts", "Other"
        ],
        next: "pi_permission"
    },
    pi_permission: {
        message: "May we have someone from our Law Firm reach out to you to discuss your case further? This may include phone calls, text messages, or emails. Standard message and data rates may apply.",
        type: "buttons",
        key: "permission_contact",
        options: [
            { label: "Yes, please contact me", next: "end_success" },
            { label: "No, thank you", next: "end_exit" }
        ]
    },

    // --- END POINTERS ---
    end_success: {
        message: "Thank you. Please allow up to 24 business hours for a phone call. Our office line is (888)595-4LAW.",
        type: "end",
        action: "submit" // Trigger data submission
    },
    end_exit: {
        message: "We completely understand. You should only discuss your case when you feel ready. If that time comes, we are here to help at (888) 595-4LAW. Take care",
        type: "end",
        action: "close"
    }
};
