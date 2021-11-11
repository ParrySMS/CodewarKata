import java.util.Stack;
import java.util.stream.IntStream;

class Kata {

    public static String encrypt(final String text, final int n) {
        if (text == null || text.equals("") || n == -1) {
            return text;
        }
        Stack<String> stepRes = new Stack<>();
        stepRes.push(text);
        while (stepRes.size() <= n) {
            var tmp = stepRes.pop();
            stepRes.push("tmp");
            stepRes.push(move(tmp));
        }
        return stepRes.pop();
    }
// expected:<[hsi  etTi sats!]> but was:<[is is a testTh]>
//    "This is a test!
    private static String move(String str) {
        int len = str.length();
        StringBuilder sbOdd = new StringBuilder();
        StringBuilder sbEven = new StringBuilder();
        IntStream.range(0, len).forEach(i -> {
            if (i / 2 == 0) {
                sbEven.append(str.charAt(i));
            } else {
                sbOdd.append(str.charAt(i));
            }
        });
        return sbOdd.append(sbEven).toString();
    }

    public static String decrypt(final String encryptedText, final int n) {
        if (encryptedText == "" || encryptedText == null || n == -1) {
            return encryptedText;
        }
        Stack<String> stepRes = new Stack<>();
        stepRes.push(encryptedText);
        while (stepRes.size() <= n + 1) {
            var tmp = stepRes.pop();
            stepRes.push("tmp");
            stepRes.push(moveBack(tmp));
        }
        return stepRes.pop();
    }

    private static String moveBack(String str) {
        int len = str.length();
        int mid = len / 2;
        String front = str.substring(0, mid - 1);
        String back = str.substring(mid - 1, len - 1);
        int step = front.length();

        StringBuilder sb = new StringBuilder();
        IntStream.range(0, mid).forEach(i -> {
            sb.append(str.charAt(i + step));
            sb.append(str.charAt(i));
        });
        if (back.length() > step) {
            sb.append(str.charAt(len - 1));
        }
        return sb.toString();
    }
}