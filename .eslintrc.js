module.exports = {
    root: true,
    extends: [
        // 'plugin:react/recommended',
        'eslint:recommended',
        'plugin:@typescript-eslint/recommended',
        'prettier',
    ],
    plugins: ['react', '@typescript-eslint'],
    parserOptions: {
        parser: '@typescript-eslint/parser',
        ecmaFeatures: {
            jsx: true,
        },
    },
    rules: {
        'react/jsx-uses-react': 'error',
        'react/jsx-uses-vars': 'error',
    },
}
