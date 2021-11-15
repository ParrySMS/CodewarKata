import java.util.Arrays;
import java.util.stream.Collectors;

public class StopGninnipSMySdroW {

    public String spinWords(String sentence) {
        if (sentence == null || sentence.isEmpty() || sentence.isBlank()) {
            return sentence;
        }
        StringBuffer sb = new StringBuffer();
        return spin(sentence, sb);
    }

    private boolean subStringHasSpace(String subString) {
        var originalLen = subString.length();
        var noSpaceString = subString.replace(" ", "");
        return (noSpaceString.length() < originalLen);
    }

    private String spin(String str, StringBuffer sb) {
        int len = str.length();
        if (subStringHasSpace(str)) {
            String[] newStr = str.split(" ", 2);
            return spin(newStr[0], sb) + " " + spin(newStr[1], sb);
        }

        if (len >= 5) {
            sb.append(str);
            String res = new String(sb.reverse().toString());
            sb.delete(0, len);
            return res;
        }

        return str;
    }

    // other solution
    public String spinWords2(String sentence) {
        return Arrays.stream(sentence.split(" "))
                .map(i -> i.length() > 4 ? new StringBuilder(i).reverse().toString() : i)
                .collect(Collectors.joining(" "));
    }
}