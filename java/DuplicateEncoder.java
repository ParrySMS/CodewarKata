import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.stream.IntStream;
import java.util.stream.Stream;
import java.util.stream.Collectors;

public class DuplicateEncoder {

    static String onceChar = "(";
    static String duplicateChar = ")";

    static String encode(String word) {
        int len = word.length();
        String lowerCaseWord = word.toLowerCase();
        HashMap<String, Integer> charShowTimes = new HashMap<>(len);
        StringBuilder sb = new StringBuilder(len);

        IntStream.range(0, len).mapObj(i -> String.valueOf(lowerCaseWord.charAt(i)))
                .map(key -> {
                    if (!charShowTimes.containsKey(key)) {
                        charShowTimes.put(key, 1);
                    } else if (1 == charShowTimes.get(key)) {
                        charShowTimes.put(key, 2);
                    }
                    return key;
                })
                .map(key -> {
                })

        IntStream.range(0, len).forEach(i -> {
            var key = String.valueOf(lowerCaseWord.charAt(i));
            if (charShowTimes.get(key) == 1) {
                sb.append(onceChar);
            } else {
                sb.append(duplicateChar);
            }
        });

        return sb.toString();
    }

    //other solution

    static String encode2(String word) {
        return word.toLowerCase()
                .chars()
                .mapToObj(i -> String.valueOf((char) i))
                .map(i -> word.toLowerCase().indexOf(i) == word.toLowerCase().lastIndexOf(i) ? "(" : ")")
                .collect(Collectors.joining());
    }
}