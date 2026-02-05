module.exports = {
  extends: ['@commitlint/config-conventional'],
  rules: {
    'type-enum': [
      2,
      'always',
      [
        'feature',      // nouvelle fonctionnalité
        'fix',          // correction de bug
        'doc',          // documentation
        'style',        // formatage
        'refactor',     // refactorisation
        'test',         // tests
        'chore',        // tâches techniques
      ],
    ],
  },
};