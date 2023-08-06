def find_missing_letter(letters):
    letters = letters.lower()
    count = 0
    for i in range(1, len(letters)):
        if(ord(letters[i]) not in range(97, 122)):
            count += 1
        else:
            if (ord(letters[i]) - ord(letters[i - count - 1])) == 2:
                return chr(ord(letters[i]) - 1) + " Is Missing"
            count = 0
    return "No Character Is Missing"