<?php

// Define the initial state of the chatbot
$state = 'greeting';

// Define the conversational flow
$flow = array(
  'greeting' => array(
    'text' => 'Hi there! How can I assist you today?',
    'options' => array(
      '1' => 'Find a health provider',
      '2' => 'Rate a health provider',
      '3' => 'I am sick',
      '4' => 'Learn more about our services',
      '5' => 'Get answers to common health questions',
    ),
    'next_states' => array(
      '1' => 'find_provider',
      '2' => 'rate_provider',
      '3' => 'check_symptoms',
      '4' => 'learn_more',
      '5' => 'health_questions',
    ),
  ),
  'find_provider' => array(
    'text' => 'Sure, where are you located?',
    'next_states' => array(
      'default' => 'error',
    ),
  ),
  'learn_more' => array(
    'text' => 'What would you like to learn more about?',
    'options' => array(
      '1' => 'Our specialties',
      '2' => 'Our locations',
    ),
    'next_states' => array(
      '1' => 'specialties',
      '2' => 'locations',
    ),
  ),
  'specialties' => array(
    'text' => 'Our specialties include cardiology, neurology, and oncology.',
    'next_states' => array(
      'default' => 'greeting',
    ),
  ),
  'locations' => array(
    'text' => 'We have locations in New York, Los Angeles, and Chicago.',
    'next_states' => array(
      'default' => 'greeting',
    ),
  ),
  'health_questions' => array(
    'text' => 'What would you like to know?',
    'options' => array(
      '1' => 'What are the symptoms of the flu?',
      '2' => 'How can I prevent the common cold?',
      '3' => 'What are the risk factors for heart disease?',
      '4' => 'How can I maintain a healthy diet?',
      '5' => 'How much exercise should I get each week?',
    ),
    'next_states' => array(
      '1' => 'flu_symptoms',
      '2' => 'prevent_cold',
      '3' => 'heart_disease_risk_factors',
      '4' => 'healthy_diet',
      '5' => 'exercise_recommendation',
    ),
  ),
  'flu_symptoms' => array(
    'text' => 'The symptoms of the flu include fever, cough, sore throat, body aches, headache, chills, and fatigue.',
    'next_states' => array(
      'default' => 'greeting',
    ),
  ),
  'prevent_cold' => array(
    'text' => 'To prevent the common cold, you should wash your hands often, avoid close contact with sick people, and avoid touching your face.',
    'next_states' => array(
      'default' => 'greeting',
    ),
  ),
  'heart_disease_risk_factors' => array(
    'text' => 'The risk factors for heart disease include high blood pressure, high cholesterol, smoking, diabetes, obesity, and a family history of heart disease.',
    'next_states' => array(
      'default' => 'greeting',
    ),