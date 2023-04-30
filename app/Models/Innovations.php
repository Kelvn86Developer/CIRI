<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Innovations extends Model
{
    use \Sushi\Sushi;

       
    public $incrementing = false;

    protected $keyType = 'string';

    public static function dataSet()
    {
        return collect([
        [
            "id"=> 1,
            "title"=> "Water incident system",
            'desc'=> "Water incident systems are typically composed of several components, including sensors, alarms, and communication devices. The sensors are placed in strategic locations where water-related incidents are likely to occur, such as near pipes, valves, and other water sources. When the sensors detect water, they send a signal to the control panel, which activates an alarm.
             
            The alarm can be configured to sound an audible alert, flash a visual indicator, or send a message to a central monitoring station. The control panel also has a communication device, which can be used to alert designated personnel, such as building managers, maintenance staff, or emergency responders. The communication device can be a phone line, a cellular network, or a radio frequency. ",
            'intro'=> "Water incident systems are designed to provide early warning and detection of water-related incidents such as leaks, floods, and other water-related problems. These systems are installed in buildings, factories, and other facilities to prevent damage to property and equipment, and to protect human life. The system works by detecting the presence of water where it should not be, and then alerting the appropriate personnel to take action.",
            'functionalities'=> [
                ['name'=> 'Early detection', 'info'=> 'The primary function of a water incident system is to detect water-related incidents as early as possible. This helps to minimize damage and prevent hazards such as electrical shock or slip and fall accidents.'],
                ['name'=> 'Alerting', 'info'=> 'The system is designed to alert designated personnel when a water-related incident is detected. This allows for a rapid response and can help to prevent further damage.'],
                ['name'=> 'Shut-off', 'info'=> 'Some systems are equipped with automatic shut-off valves, which can be programmed to turn off the water supply when a leak or flood is detected. This can help to prevent further damage and reduce the risk of electrical hazards'],
                ['name'=> 'Remote monitoring and control', 'info'=> 'With this feature, the system can be monitored and controlled from a central location, such as a control room or a mobile device. This can help to reduce response times and improve efficiency in managing water-related incidents.']
            ],
        ],
            
        [
            'id'=> 2,
        'title'=> "AcademicERP",
            'desc'=> "An academic ERP system typically includes modules for student information, admissions, finance, and human resources. The student information module manages student data such as enrollment, attendance, grades, and transcripts. The admissions module automates the admission process, from application submission to acceptance, while the finance module manages billing and payments. The human resources module manages faculty and staff information, including employment contracts, payroll, and benefits. Additionally, an academic ERP system may include functionality for course scheduling, online learning, and academic analytics",
            'intro'=> "An academic ERP (Enterprise Resource Planning) system is a software solution designed to manage various aspects of academic institutions, including student data, admissions, faculty information, finance, and more. The system integrates various functionalities into one cohesive platform, allowing institutions to streamline processes and improve efficiency",
            'functionalities'=> [
                ['name'=> 'Streamlined process', 'info'=> 'The academic ERP system streamlines various processes, from student enrollment to billing and payments. This improves efficiency and reduces the workload on administrative staff.'],
                ['name'=> 'Centralized data', 'info'=> 'The system stores all academic institution data in one centralized location, making it easier to access and manage. This improves data accuracy and reduces the likelihood of errors.'],
                ['name'=> 'Customizable', 'info'=> 'Academic ERP systems are customizable, allowing institutions to tailor the software to their specific needs. This ensures that the system meets the institution`s requirements and can evolve as the institution grows.'],
                ['name'=> 'Data analytics', 'info'=> 'Academic ERP systems provide analytics capabilities, allowing institutions to analyze academic performance, enrollment trends, and financial data. This helps institutions make data-driven decisions and improve overall performance']
            ]
        ], 

        [
            'id'=> 3,
            'title'=> "Barcode access control system",
            'desc'=> "A barcode access control system typically includes a barcode reader, a database of authorized users, and a control panel. The barcode reader scans the barcode on the user's credential, and the control panel compares it to the authorized user database. If the barcode matches an authorized user, access is granted. If the barcode does not match, access is denied.

            Barcode access control systems may be used in a variety of settings, including office buildings, research facilities, and manufacturing plants. The system can be integrated with other security systems, such as CCTV cameras, to enhance overall security.",
            'intro'=> "A barcode access control system is a security system that uses barcodes to grant or deny access to a particular area. The system works by scanning a barcode on an ID card or other credential, and then comparing it to a database of authorized users.",
            'functionalities'=> [
                ['name'=> 'Access control', 'info'=> 'The primary function of the barcode access control system is to control access to a particular area. This enhances overall security and reduces the risk of unauthorized access.'],
                ['name'=> 'Scalability', 'info'=>  'Barcode access control systems are scalable, meaning they can be expanded as an organization grows. This makes them a cost-effective solution for organizations of all sizes.'],
                ['name'=> 'Customization', 'info'=> ' Barcode access control systems are customizable, allowing organizations to tailor the system to their specific needs. This ensures that the system meets the organization`s requirements and can evolve as the organization grows.'],
                ['name'=> 'Integration', 'info'=> ' Barcode access control systems can be integrated with other security systems, such as CCTV cameras, to enhance overall security.'],
            ]
        ],

        [
            'id'=> 4,
            'title'=> "Cargo Management system",
            'desc'=> "Cargo management systems typically include features such as order management, shipment tracking, and financial management. The system allows authorized users, such as shippers, carriers, and consignees, to access the relevant data and manage their tasks in a streamlined and efficient manner.Also includes modules for tracking cargo, managing inventory, and coordinating logistics. The tracking module provides real-time information on the location of cargo, while the inventory module manages the storage and distribution of cargo.",
            'intro'=> "Cargo management systems are designed to provide end-to-end visibility and control over cargo logistics and transportation. The system helps to manage the entire cargo lifecycle, from booking and shipping to delivery and invoicing.",
            'functionalities'=> [
                ['name'=> 'Order management', 'info'=> 'The cargo management system allows shippers to manage orders, such as booking cargo, scheduling pickup and delivery, and managing documentation.'],
                ['name'=> 'Shipment tracking', 'info'=> 'The system allows for real-time tracking of cargo shipments, which can help to improve visibility and control over the supply chain.'],
                ['name'=> 'Inventory management', 'info'=> ' The system allows for the management of inventory, such as tracking cargo movement and managing stock levels.'],
                ['name'=> 'Financial management', 'info'=> 'The cargo management system provides a comprehensive financial management module, which includes billing, invoicing, and payment management. This helps to streamline financial processes and improve cash flow.'],
            ]
        ]

        ]);
    }


}
