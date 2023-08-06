def longest_word_in(sentence):
  sentence = sentence.split(" ")
  max_length = sentence[0]
  for i in range(len(sentence)):
    if len(sentence[i]) > len(max_length):
      max_length = sentence[i]
  return max_length