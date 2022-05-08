$('#quiz').quiz({
    questions: [
      {
        'q': 'A smaple question?',
        'options': [
          'Answer 1',
          'Answer 2',
          'Answer 3',
          'Answer 4'
        ],
        'correctIndex': 1,
        'correctResponse': 'Custom correct response.',
        'incorrectResponse': 'Custom incorrect response.'
      }
    ]
  });